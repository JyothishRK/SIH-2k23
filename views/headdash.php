<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<div class="header">
  <div class="row">
    <div class="col-lg-6">
    </div>
    <?php
    include_once '../models/dbConnection.php';
    session_start();
    $email = $_SESSION['email'];
    if (!(isset($_SESSION['email']))) {
      header("location:index.php");
    } else {
      $name = $_SESSION['name'];

      include_once '../models/dbConnection.php';
      echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="headdash.php" class="log log1">' . $email . '</a>&nbsp;|&nbsp;<a href="logout.php?q=headdash.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
    } ?>

  </div>
</div>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PARAKH </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <script>
    $(function() {
      $(document).on('scroll', function() {
        console.log('scroll top : ' + $(window).scrollTop());
        if ($(window).scrollTop() >= $(".logo").height()) {
          $(".navbar").addClass("navbar-fixed-top");
        }

        if ($(window).scrollTop() < $(".logo").height()) {
          $(".navbar").removeClass("navbar-fixed-top");
        }
      });
    });
  </script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <style>
    .styles_calendar__1s6ps {
      display: block;
      max-width: 100%;
      height: auto;
      overflow: visible;
    }

    .styles_calendar__1s6ps text {
      fill: currentColor;
    }

    .styles_block__1oBAV {
      stroke: rgba(0, 0, 0, 0.1);
      stroke-width: 1px;
      shape-rendering: geometricPrecision;
    }

    .styles_footer__56qQv {
      display: flex;
    }

    .styles_legendColors__1wUi_ {
      margin-left: auto;
      display: flex;
      align-items: center;
      gap: 0.2em;
    }

    /*noinspection CssUnresolvedCustomProperty*/
    @keyframes styles_loadingAnimation__1DJJ8 {
      0% {
        fill: var(--react-activity-calendar-loading);
      }

      50% {
        fill: var(--react-activity-calendar-loading-active);
      }

      100% {
        fill: var(--react-activity-calendar-loading);
      }
    }

    /* Global Styles */
    body {
      background-image: url('cool-background.jpg');
      font-family: 'Montserrat', sans-serif;
    }

    /* Header */
    .header {
      background-color: #1E3A8A;
      color: #fff;
      padding: 20px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .header .title1 {
      font-size: 24px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .header .log1 {
      font-size: 18px;
      font-weight: bold;
    }

    .header .log1 .glyphicon {
      margin-right: 10px;
    }

    .header .log {
      font-size: 18px;
      font-weight: bold;
      color: #fff;
      text-decoration: none;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      transition: all 0.5s;
    }

    .header .log:hover {
      color: #f4511e;
      text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.5);
    }

    /* Navigation */
    .navbar {
      background-color: #4D648D;
      border: none;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 16px;
      font-weight: bold;
      letter-spacing: 2px;
      text-transform: uppercase;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .navbar .navbar-brand {
      color: #f4511e !important;
      font-size: 24px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 2px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .navbar .navbar-brand:hover {
      color: #f4511e;
      text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.5);
    }

    .navbar .navbar-nav>li>a {
      color: #f4511e;
      padding: 20px;
      transition: all 0.5s;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .navbar .navbar-nav>li>a:hover {
      color: #f4511e;
      background-color: #1E3A8A;
      transform: scale(1.1);
    }

    .navbar .dropdown-menu {
      background-color: #4D648D;
      border: none;
      border-radius: 0;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .navbar .dropdown-menu>li>a {
      color: #fff;
      padding: 10px 20px;
      transition: all 0.5s;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .navbar .dropdown-menu>li>a:hover {
      color: #f4511e;
      background-color: #1E3A8A;
      transform: scale(1.1);
    }

    /* Content */
    .content {
      padding: 50px;
    }

    .content h2 {
      font-size: 36px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-bottom: 50px;
      text-align: center;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .content .panel {
      border: none;
      border-radius: 10px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
      transition: all 0.5s;
    }

    .content .panel:hover {
      box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.5);
      transform: scale(1.05);
    }

    .content .panel-heading {
      background-color: #1E3A8A;
      color: #fff;
      font-size: 24px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 2px;
      border-radius: 10px 10px 0 0;
      padding: 20px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .content .panel-body {
      padding: 50px;
    }

    .content .panel-footer {
      background-color: #1E3A8A;
      color: #fff;
      font-size: 18px;
      font-weight: bold;
      text-transform: uppercase;
    }

    /* Animations */
    .animated {
      animation-duration: 1s;
      animation-fill-mode: both;
    }

    .fadeIn {
      animation-name: fadeIn;
    }

    .fadeOut {
      animation-name: fadeOut;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fadeOut {
      from {
        opacity: 1;
      }

      to {
        opacity: 0;
      }
    }

    /* Add hover animation to table rows */
    .table tbody tr:hover {
      background-color: #FFC300;
      transform: scale(1.02);
      transition: background-color 0.3s, transform 0.3s;
    }

    /* Animate table header */
    .table thead th {
      background-color: #FFC300;
      animation: slideInDown 1s forwards;
    }

    /* Keyframes animation for table header */
    @keyframes slideInDown {
      from {
        transform: translateY(-50px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }
  </style>

</head>

<body style="background:#eee;">

  <!-- admin start-->

  <!--navigation menu-->
  <nav class="navbar navbar-default title1">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="headdash.php?q=0"><b>Dashboard - head</b></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li <?php if (@$_GET['q'] == 0) echo 'class="active"'; ?>><a href="headdash.php?q=0">Home<span class="sr-only">(current)</span></a></li>
          <li <?php if (@$_GET['q'] == 1) echo 'class="active"'; ?>><a href="headdash.php?q=1">User</a></li>
          <li <?php if (@$_GET['q'] == 2) echo 'class="active"'; ?>><a href="headdash.php?q=2">Ranking</a></li>
          <li <?php if (@$_GET['q'] == 3) echo 'class="active"'; ?>><a href="headdash.php?q=3">Feedback</a></li>
          <li class="dropdown <?php if (@$_GET['q'] == 4 || @$_GET['q'] == 5) echo 'active'; ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="headdash.php?q=4">Add Admin</a></li>
              <li><a href="headdash.php?q=5">Remove Admin</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!--navigation menu closed-->
  <div class="container"><!--container start-->
    <div class="row">
      <div class="col-md-12">
        <!--home start-->

        <?php if (@$_GET['q'] == 0) {

          $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
          echo  '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>positive</b></td><td><b>negative</b></td><td><b>Time limit</b></td><td></td></tr>';
          $c = 1;
          while ($row = mysqli_fetch_array($result)) {
            $title = $row['title'];
            $total = $row['total'];
            $sahi = $row['sahi'];
            $wrong = $row['wrong'];
            $time = $row['time'];
            $eid = $row['eid'];
            $q12 = mysqli_query($con, "SELECT score FROM history WHERE eid='$eid' AND email='$email'") or die('Error98');
            $rowcount = mysqli_num_rows($q12);
            if ($rowcount == 0) {
              echo '<tr><td>' . $c++ . '</td><td>' . $title . '</td><td>' . $total . '</td><td>' . $sahi * $total . '</td><td>' . $sahi . '</td><td>' . $wrong . '</td><td>' . $time . '&nbsp;min</td>
	</tr>';
            } else {
              echo '<tr style="color:#99cc32"><td>' . $c++ . '</td><td>' . $title . '&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>' . $total . '</td><td>' . $sahi * $total . '</td><td>' . $time . '&nbsp;min</td>
	</tr>';
            }
          }
          $c = 0;
          echo '</table></div>';
        }

        //ranking start
        if (@$_GET['q'] == 2) {
          $q = mysqli_query($con, "SELECT * FROM `rank`  ORDER BY score DESC ") or die('Error223');
          echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr ><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
          $c = 0;
          while ($row = mysqli_fetch_array($q)) {
            $e = $row['email'];
            $s = $row['score'];
            $q12 = mysqli_query($con, "SELECT * FROM user WHERE email='$e' ") or die('Error231');
            while ($row = mysqli_fetch_array($q12)) {
              $name = $row['name'];
              $gender = $row['gender'];
              $college = $row['college'];
            }
            $c++;
            echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td>' . $name . '</td><td>' . $gender . '</td><td>' . $college . '</td><td>' . $s . '</td><td>';
          }
          echo '</table></div>';
        }

        ?>


        <!--home closed-->
        <!-- User List -->
        <?php if (@$_GET['q'] == 1) { ?>
          <div class="panel">
            <table class="table table-striped table-bordered title1 animated fadeIn">
              <thead>
                <tr>
                  <th><b>S.N.</b></th>
                  <th><b>Name</b></th>
                  <th><b>Gender</b></th>
                  <th><b>College</b></th>
                  <th><b>Email</b></th>
                  <th><b>Mobile</b></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $result = mysqli_query($con, "SELECT * FROM user") or die('Error');
                $c = 1;
                while ($row = mysqli_fetch_array($result)) {
                  $name = $row['name'];
                  $mob = $row['mob'];
                  $gender = $row['gender'];
                  $email = $row['email'];
                  $college = $row['college'];
                ?>
                  <tr>
                    <td><?php echo $c++; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $gender; ?></td>
                    <td><?php echo $college; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $mob; ?></td>
                    <td>
                      <a class="btn btn-danger btn-sm" title="Delete User" href="update.php?demail=<?php echo $email; ?>">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        <?php } ?>
        <!-- End User List -->


        <!--feedback start-->
        <?php if (@$_GET['q'] == 3) {
          $result = mysqli_query($con, "SELECT * FROM `feedback` ORDER BY `feedback`.`date` DESC") or die('Error');
          echo  '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Subject</b></td><td><b>Email</b></td><td><b>Date</b></td><td><b>Time</b></td><td><b>By</b></td><td></td><td></td></tr>';
          $c = 1;
          while ($row = mysqli_fetch_array($result)) {
            $date = $row['date'];
            $date = date("d-m-Y", strtotime($date));
            $time = $row['time'];
            $subject = $row['subject'];
            $name = $row['name'];
            $email = $row['email'];
            $id = $row['id'];
            echo '<tr><td>' . $c++ . '</td>';
            echo '<td><a title="Click to open feedback" href="headdash.php?q=3&fid=' . $id . '">' . $subject . '</a></td><td>' . $email . '</td><td>' . $date . '</td><td>' . $time . '</td><td>' . $name . '</td>
	<td><a title="Open Feedback" href="headdash.php?q=3&fid=' . $id . '"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>';
            echo '<td><a title="Delete Feedback" href="update.php?fdid=' . $id . '"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>

	</tr>';
          }
          echo '</table></div>';
        }
        ?>
        <!--feedback closed-->

        <!--feedback reading portion start-->
        <?php if (@$_GET['fid']) {
          echo '<br />';
          $id = @$_GET['fid'];
          $result = mysqli_query($con, "SELECT * FROM feedback WHERE id='$id' ") or die('Error');
          while ($row = mysqli_fetch_array($result)) {
            $name = $row['name'];
            $subject = $row['subject'];
            $date = $row['date'];
            $date = date("d-m-Y", strtotime($date));
            $time = $row['time'];
            $feedback = $row['feedback'];

            echo '<div class="panel"<a title="Back to Archive" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>' . $subject . '</b></h1>';
            echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;' . $date . '</span>
<span style="line-height:35px;padding:5px;">&nbsp;<b>Time:</b>&nbsp;' . $time . '</span><span style="line-height:35px;padding:5px;">&nbsp;<b>By:</b>&nbsp;' . $name . '</span><br />' . $feedback . '</div></div>';
          }
        } ?>
        <!--Feedback reading portion closed-->



        <!--add admin start-->

        <?php
        if (@$_GET['q'] == 4) {
          echo ' 
<div class="row">
<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Admin Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="signadmin.php?q=headdash.php?q=4"  method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="email" name="email" placeholder="Enter Admin Email" class="form-control input-md" type="email">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>  
  <div class="col-md-12">
  <input id="password" name="password" placeholder="Enter password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';
        }
        ?>
        <!--add admin end-->


        <!--users start-->
        <?php if (@$_GET['q'] == 5) {

          $result = mysqli_query($con, "SELECT * FROM admin where role ='admin' ") or die('Error');
          echo  '<div class="panel"><table class="table table-striped title1">
<tr><td><b>Email</b></td><td></td></tr>';
          $c = 1;
          while ($row = mysqli_fetch_array($result)) {

            $email = $row['email'];


            echo '<tr><td>' . $email . '</td>
  <td><a title="Delete User" href="update.php?demail1=' . $email . '"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
          }
          $c = 0;
          echo '</table></div>';
        } ?>
        <!--user end-->



      </div><!--remove admin closed-->
    </div>
  </div>
</body>

</html>