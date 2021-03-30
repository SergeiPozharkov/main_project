<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php

include_once "connect.php";

$sql = "SELECT * FROM `vedomost`";

/** @var false|mysqli $link */
$result = mysqli_query($link, $sql);

echo "<table border='1' class='table table-hover table-dark'>";
echo "<th scope='col'>Name</th><th scope='col'>Zp</th><th>Delete</th><th>Edit</th>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>$row[name]</td><td>$row[zp]</td><td><a href='delete.php?id=$row[id]'>❌</a></td><td><a href='showEdit.php?id=$row[id]'>✏</a></td></tr>";
}
echo "</table>";
?>
<a class="btn btn-secondary" href="showAdd.php">Добавить</a>
</body>
</html>