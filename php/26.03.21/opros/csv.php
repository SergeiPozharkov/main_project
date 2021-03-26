<?php

header('Content-Disposition: attachment; filename="file.csv"');

$link = mysqli_connect("localhost", "root", "root", "guest_book");

$sql = "SELECT * FROM `answers`";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "$row[name];$row[review];$row[source];$row[phone]\n";
}

