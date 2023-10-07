<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="views/styles/home.css">

    <title>Question Bank Upload</title>
</head>

<body>
    <div class='file_upload'>
        <form action="router.php" method="post" enctype="multipart/form-data">
            <div class="file-input-container">
                <label for="csvFile" class="custom-file-upload">Upload your Question bank CSV</label>
                <input type="file" name="csvFile" id='csvFile' accept=".csv" required>
            </div><br>

            <input type="submit" value="Upload"><br>
        </form>
    </div><br>
    <form action='router.php' method="post" enctype="multipart/form-data">
        <input type="hidden" name="skip_upload"> <!-- Example value, replace with your data -->
        <button type="submit" name="myButton">Skip upload</button>
    </form>

</body>

</html>