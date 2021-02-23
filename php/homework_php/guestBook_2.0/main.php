<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"-->
<!--          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"-->
<!--          crossorigin="anonymous">-->
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

    // $arrMounth = [
    //     'January' => "Января",
    //     'February' => "Февраля",
    //     'March' => "Марта",
    //     'April' => "Апреля",
    //     'May' => "Мая",
    //     'June' => "Июня",
    //     'July' => "Июля",
    //     'August' => "Августа",
    //     'September' => "Сентября",
    //     'October' => "Октября",
    //     'November' => "Ноября",
    //     'December' => "Декабря"
    // ];

    // $arrWeakDay = [
    //     "Monday" => "Понедель­ник",
    //     "Tuesday" => "Вторник",
    //     "Wednes­day" => "Среда",
    //     "Thursday" => "Четверг",
    //     "Friday" => "Пятница",
    //     "Saturday" => "Суббота",
    //     "Sunday" => "Воскре­сенье"
    // ];

    $data = json_decode(file_get_contents("data.json"), true);
    echo "<table border=1>";
    echo "<th>Name</th><th>Messag</th><th>Date</th>";
    foreach ($data as $row) {
        // foreach ($arrMounth as $mounth) {
            // foreach ($arrWeakDay as $weakDay) {


                // print_r($row);
                if (!censure($row["msg"])) {
                    // print_r($row["time"]);
                    $newTime = explode(" ", $row["time"]);
                    // $date = preg_replace("/^\d{2}+\-\d{2}+\-\d{2}+$/us", "", $row["time"]);
                    // trim($newTime[4], " ");
                    // print_r($newTime);


                    $msg = smile($row['msg']);
                    echo "<tr><td>$row[name]</td><td>$msg</td><td>$newTime[0] $newTime[1] $newTime[2] ($newTime[3])<td></tr>";
                }
            // }
        // }
    }
    echo "</table>";
    ?>
</body>

</html>