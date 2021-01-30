<?php
$data = file_get_contents("guest_data.txt");
$records = explode("<======>", $data);
echo "<div class=table>";
echo "<table border=1>";
echo "<th>Name</th><th>Email</th><th>Messag</th><th>Date/Time</th>";
foreach ($records as $record) {
    $row = explode("\n", trim($record));
    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
}

echo "</table>";
echo "</div>";
