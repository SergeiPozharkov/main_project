<?php

function fieldsList($dblink, $tableName)
{
    $sql = "SHOW COLUMNS FROM $tableName";
    $result = mysqli_query($dblink, $sql);
    $fields = [];

    while ($row = mysqli_fetch_assoc($result)) {

        if ($row["Field"] != "id") {
            $fields[] = $row["Field"];
        }
    }

    return $fields;
}
