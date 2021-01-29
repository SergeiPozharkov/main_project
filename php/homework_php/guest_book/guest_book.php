<?php
if (!empty($_POST)) {
    $row = "\n<======>\n" .
        $_POST["name"] . "\n" .
        $_POST["email"] . "\n" .
        $_POST["text"];
    file_put_contents("guest_data.txt", $row, FILE_APPEND);
    header("Location: ?");
    die();  // or exit()
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $data = file_get_contents("guest_data.txt");
    $records = explode("<======>", $data);
    echo "<div class=table>";
    echo "<table border=1>";
    echo "<th>Name</th><th>Email</th><th>Messag</th>";
    foreach ($records as $record) {
        $row = explode("\n", trim($record));
        // print_r($row);
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
    }

    echo "</table>";
    echo "</div>";
    ?>
    <br>
    <form action="?" method="post">
        <span><b>Name:</b></span><input type="text" name="name"><br><br>
        <span><b>Email:</b></span><input type="text" name="email"><br><br>
        <span><b>Messag:</b></span><br><textarea name="text" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="ok">
    </form>
</body>

</html>