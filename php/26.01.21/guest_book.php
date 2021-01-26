<?php
if (!empty($_POST)) {
    $row = "\n<======>\n" .
        $_POST["name"] . "\n" .
        $_POST["email"] . "\n" .
        $_POST["text"];
    file_put_contents("guest_data.txt", $row, FILE_APPEND);
    header("Loacation: ?");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $data = file_get_contents("guest_data.txt");
    $records = explode("<======>", $data);
    echo "<table border=1>";
    foreach ($records as $record) {
        $row = explode("\n", trim($record));
        // print_r($row);
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
    }
    echo "</table>";
    ?>
    <form action="?" method="post">
        <span>Name:</span><input type="text" name="name">
        <span>Surname:</span><input type="text" name="email">
        <span>Email:</span><input type="text" name="text">
        <input type="submit" value="ok">
    </form>
</body>

</html>