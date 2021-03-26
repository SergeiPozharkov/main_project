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

$link = mysqli_connect("localhost", "root", "root", "guest_book");

$sql = "SELECT * FROM `gb`";

$result = mysqli_query($link, $sql);
echo "<table border='1' class='table table-hover table-dark'>";
echo "<th scope='col'>Name</th><th scope='col'>Message</th>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>$row[message]</td><td>$row[name]</td></tr>";
}
echo "</table>";

mysqli_free_result($result);
mysqli_close($link);
?>
</body>
</html>
