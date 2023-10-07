<?php
class homeModel
{
  private $db;

  public function __construct($db)
  {
    $this->db = $db;
  }
  public function dataInsertion($csvFile)
  {
    try {
      if (($handle = fopen($csvFile, "r")) !== false) {
        $stmt = $this->db->prepare("INSERT IGNORE INTO Qn_bank (question,exp,cop,opa,opb,opc,opd,subject_name,id,correct,total,diff_score) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?,?,?,?)");
        $firstRow = true;

        $count = 0;
        while (($data = fgetcsv($handle, 9999, ",")) !== false) {
          if ($firstRow) {
            $firstRow = false;
            continue;
          }
          if ($count > 50) {
            break;
          }
          $r1 = rand(35, 60);
          $r2 = rand($r1, 75);

          $diff = (1 - (float)$r1 / $r2) * 100;

          // Bind parameters and execute the prepared statement
          $stmt->bindParam(1, $data[0]);
          $stmt->bindParam(2, $data[1]);
          $stmt->bindParam(3, $data[2]);
          $stmt->bindParam(4, $data[3]);
          $stmt->bindParam(5, $data[4]);
          $stmt->bindParam(6, $data[5]);
          $stmt->bindParam(7, $data[6]);
          $stmt->bindParam(8, $data[8]);
          $stmt->bindParam(9, $data[9]);
          $stmt->bindParam(10, $r1);
          $stmt->bindParam(11, $r2);
          $stmt->bindParam(12, $diff);

          $stmt->execute();

          // Check for errors
          if ($stmt->errorCode() !== '00000') {
            $errorInfo = $stmt->errorInfo();
            echo "Error inserting data: " . $errorInfo[2];
          }
          $count++;
        }
        fclose($handle);
      } else {
        echo "Error opening CSV file.";
      }
    } catch (PDOException $e) {
      echo "Database Error: " . $e->getMessage();
    }
  }

  public function fetchQnfromDiff($diff)
  {
    $query = "SELECT * FROM Qn_bank
    ORDER BY ABS(diff_score - :diffscore) LIMIT 1;";

    $temp = $this->db->prepare($query);
    $temp->bindParam(':diffscore', $diff, PDO::PARAM_STR);
    $temp->execute();
    $qa = $temp->fetchall(PDO::FETCH_ASSOC);

    return $qa;
  }

  public function fetchFirstQuestion()
  {
    $query = "SELECT * FROM userhistory ORDER BY created_at DESC LIMIT 1";
    $temp = $this->db->prepare($query);
    $temp->execute();
    $prev_details = $temp->fetchall(PDO::FETCH_ASSOC);

    if (empty($prev_details)) {
      $diff = 50.0;
    } else {
      $diff = $prev_details[0]['average_difficulty'];
    }
    $qa = $this->fetchQnfromDiff($diff);

    return $qa;
  }
  public function dummy($userData)
  {
    $input_data['Difficulty'] = $userData['Difficulty'];
    $input_data['Malpractice_score'] = $userData['Malpractice_score'];
    $input_data['Time_Spent'] = $userData['Time_Spent'];
    $input_data['Result'] = $userData['Result'];

    $input_data_json = json_encode($input_data);

    $command = 'python predict.py \'' . $input_data_json . '\'';
    $diff = exec($command);
    return $diff;
  }

  public function fetchQuestion($qn_num, $userData)
  {
    if ($qn_num <= 5) {
      $input_data = array();
      array_push($input_data, $userData['Difficulty']);
      array_push($input_data, $userData['Malpractice_score']);
      array_push($input_data, $userData['Time_Spent']);
      array_push($input_data, $userData['Result']);

      $input_data_json = json_encode($input_data);

      $command = 'python predict.py \'' . $input_data_json . '\'';
      $diff = exec($command);
      if ($diff == null) {
        $diff = 50.0;
      }
      $outp = array();
      array_push($outp, $diff);

      $qa = $this->fetchQnfromDiff($diff);
      array_push($outp, $qa);

      return $outp;
    }
    return null;
  }

  // public function fetchQuestion($qn_num)
  // {
  //   $sql = "SELECT * FROM Qn_bank ORDER BY RAND() LIMIT 1";
  //   $temp = $this->db->prepare($sql);
  //   $temp->execute();
  //   if ($qn_num <= 5) {
  //     $qa = $temp->fetchall(PDO::FETCH_ASSOC);
  //     return $qa;
  //   }

  //   return null;
  // }

  public function validateUserAns($qn_id, $user_ans)
  {
    $query = "SELECT cop from Qn_bank where id=:qnid";
    $temp = $this->db->prepare($query);
    $temp->bindParam(':qnid', $qn_id, PDO::PARAM_STR);
    $temp->execute();
    $crct_ans = $temp->fetchall(PDO::FETCH_ASSOC);

    $crct_ans = $crct_ans[0]['cop'];
    if ($user_ans == $crct_ans) {
      return 1;
    } else {
      return 0;
    }
  }

  public function fetchMalpScore($starttime, $endtime)
  {
    $query1 = "SELECT COUNT(*) AS count FROM malpractice WHERE curr_status = 1 AND time_stamp > :start_time AND time_stamp < :end_time";
    $stmt = $this->db->prepare($query1);
    $stmt->bindParam(':start_time', $starttime, PDO::PARAM_STR);
    $stmt->bindParam(':end_time', $endtime, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $count = $result['count'];
    $stmt->closeCursor();

    $query2 = "SELECT COUNT(*) AS total FROM malpractice";
    $totalStmt = $this->db->query($query2);
    $totalResult = $totalStmt->fetch(PDO::FETCH_ASSOC);
    $totalOccurrences = $totalResult['total'];

    if ($totalOccurrences > 0) {
      $percentage = ($count / $totalOccurrences) * 100;
    } else {
      $percentage = 0;
    }

    $query = "DELETE FROM malpractice";
    $temp = $this->db->prepare($query);
    $temp->execute();

    return $percentage;
  }

  public function updatePerc($qn_id, $res)
  {
    if ($res == 1) {
      $query = "UPDATE Qn_bank SET correct=correct+1, total=total+1,
      diff_score=(1.0-(correct/total))*100.0 WHERE id=:qnid";
    } else {
      $query = "UPDATE Qn_bank SET total=total+1, diff_score=(1.0-(correct/total))*100.0
      WHERE id=:qnid";
    }
    $temp = $this->db->prepare($query);
    $temp->bindParam(':qnid', $qn_id, PDO::PARAM_STR);
    $temp->execute();
  }

  public function fetchDiff($qn_id)
  {
    $query = "SELECT diff_score from Qn_bank where id=:qnid";
    $temp = $this->db->prepare($query);
    $temp->bindParam(':qnid', $qn_id, PDO::PARAM_STR);
    $temp->execute();
    $diff_score = $temp->fetchall(PDO::FETCH_ASSOC);

    $diff_score = $diff_score[0]['diff_score'];

    return $diff_score;
  }

  public function tempScoresTable($qn_id, $res, $diff)
  {
    $sql = "INSERT INTO temp (id, correct, diff_score) VALUES (:qn_id, :res, :diff)";

    $stmt = $this->db->prepare($sql);

    $stmt->execute([
      ':qn_id' => $qn_id,
      ':res' => $res,
      ':diff' => strval($diff)
    ]);
  }

  public function getScoreAndAverage()
  {
    $sql = "SELECT SUM(correct) AS score, AVG(diff_score) AS avgdiff FROM temp";
    $stmt = $this->db->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
  }

  public function userhistory($totalResult, $averageDifficulty, $currentDatetime)
  {
    $sql = "INSERT INTO userhistory (total_result, average_difficulty, created_at) VALUES ((:totalResult/4)*100, :averageDifficulty, :currentDatetime)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':totalResult', $totalResult, PDO::PARAM_INT);
    $stmt->bindParam(':averageDifficulty', $averageDifficulty, PDO::PARAM_STR);
    $stmt->bindParam(':currentDatetime', $currentDatetime, PDO::PARAM_STR);
    $stmt->execute();
  }
}
