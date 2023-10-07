<?php
$input_data = [40, 0, 15, 1];  // Replace with your actual input data

// Encode input data to JSON
$input_json = json_encode($input_data);

// Call the Python script to make predictions
// Call the Python script to make predictions and capture the error
$command = 'python predict.py ' . escapeshellarg($input_json) . ' 2>&1';
exec($command, $output, $return_code);

// Check if an error occurred
if ($return_code !== 0) {
    echo "An error occurred while executing the Python script:<br>";
    echo "Error code: $return_code<br>";
    echo "Error message:<br>";
    foreach ($output as $line) {
        echo htmlspecialchars($line) . "<br>";
    }
} else {
    // Check if there's a prediction result
    $result = end($output);  // Get the last line of output
    $prediction_result = json_decode($result, true);

    if (isset($prediction_result['predicted_norm_score'])) {
        echo "Predicted Normalized Score: " . $prediction_result['predicted_norm_score'];
    } else {
        echo "An error occurred during prediction:<br>";
        echo nl2br(htmlspecialchars($result)); // Display error message
    }
}


?>