<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="?" method="post">
        <span>Email:</span><input type="text" name="email">
        <input type="submit" value="chec">
    </form>
    <?php
    $str = $_POST["email"];
    $pat = "/^[0-9A-Z_]{5,}+@[0-9A-Z]{2,}+\.[A-Z]{2,6}$/iu";
    if (preg_match($pat, $str)) {
        echo "емейл корректен";
    } else {
        echo "емейл не корректен";
    }
    ?>
</body>

</html>