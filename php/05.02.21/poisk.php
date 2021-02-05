<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="?" method="post">
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="ок">
    </form>
    <?php
    $str = $_POST["text"];
    $rep = "/<img src='images/Smile.png'>/";
    $pat = "/(:\)|:-)\)?/iu"; // "/ :-?\) /";
    $res = preg_replace($pat, $rep, $str);
    echo $str . " $res";
    ?>
</body>

</html>