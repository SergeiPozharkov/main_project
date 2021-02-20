<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="add.php" method="post">
        <textarea name="msg" icols="30" rows="10"></textarea><br>
        <input type="text" name="name"><br>
        <input type="submit" value="ok">
    </form>
    <?php
    include "function.php";

    $data = json_decode(file_get_contents("data.json"), true);

    foreach ($data as $row) {
        // if (!censure($row["msg"])) {
    
            $date = preg_replace("/\b\d{2}+\-\d{2}+\-\d{2}+\b/ius", " ", $row["time"]);
    
            echo smile($row["msg"]) . " " . $row["name"] . $date . "<br>\n";
        // }
    
    }

    // foreach ($data as $row) {
    //     echo smile($row["msg"]) . $row["name"] . censure($row["msg"]) .  "<br>\n";
    // }
    ?>
</body>

</html>