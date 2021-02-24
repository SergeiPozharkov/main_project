<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <form action="add.php" method="post">
        <span>Nickname:</span><br>
        <input type="text" name="name"><br><br>
        <span>Message:</span><br>
        <textarea name="msg" icols="60" rows="10"></textarea><br><br>
        <input type="submit" value="ok">
    </form>
    <br>
    <?php

    include "functions.php";

    $data = json_decode(file_get_contents("data.json"), true);
    echo "<table border=1>";
    echo "<th>Name</th><th>Messag</th><th>Date</th>";
    foreach ($data as $row) {

        if (!censure($row["msg"])) {
    
            $dateAndTime = dateAndTimeFormat($row["time"]);

            $msg = smile($row['msg']);
            
            echo "<tr><td>$row[name]</td><td>$msg</td><td>$dateAndTime<td></tr>";
        }
        
    }
    echo "</table>";
    ?>
</body>

</html>