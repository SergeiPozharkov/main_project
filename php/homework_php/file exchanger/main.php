<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="file_move.php" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="104857600" />
        Send this file: <input name="userfile" type="file" />
        <input type="submit" value="Send file" />
    </form>
    <h1>List of uploaded files:</h1>
    <?php include "file_exchanger.php" ?>
</body>
</html>