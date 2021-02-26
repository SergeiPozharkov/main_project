<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <form action="add.php" method="post">
                    <span>Nickname:</span><br>
                    <input type="text" name="name" placeholder="Enter nickname" class="form-control" id="exampleFormControlInput1"><br><br>
                    <span>Message:</span><br>
                    <textarea name="msg" icols="60" rows="10" class="form-control" placeholder="Enter message" id="floatingTextarea2" style="height: 100px"></textarea><br><br>
                    <input type="submit" class="btn btn-primary mb-3" value="ok">
                </form>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <?php

                include "functions.php";

                $data = json_decode(file_get_contents("data.json"), true);

                echo "<table class='table-light table table-bordered'>";
                echo "<th>Name</th><th>Messag</th><th>Date/Time</th>";
                foreach ($data as $row) {

                    $dateAndTime = dateAndTimeFormat($row["time"]);
                    $msg = smile($row["msg"]);

                    echo "<tr><td>$row[name]</td><td>$msg</td><td>$dateAndTime<td></tr>";
                }
                echo "</table>";
                ?>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>

</body>

</html>