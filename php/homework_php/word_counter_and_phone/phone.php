<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="?" method="post">
        <h1>Check phone number</h1>
        <span>Phone number: </span><input type="tel" placeholder="Enter your phone number" name="phone"><br>
        <input type="submit" value="Check">
    </form>
    <br>
    <?php
    if (!empty($_POST["phone"])) {

        $str = $_POST["phone"];

        $pat = "/^([80212]{5}+[\d]{6})$|^([\+375212]{7}+[\d]{6})$|^([\+375\(212\)]{9}+[\d]{6})$|^([\+375\(212\)]{9}+\d{2}\-+\d{2}\-[\d]{2})$|^([\+375\-\(212\)\-]{11}+\d{2}\-+\d{2}\-[\d]{2})$|^(\d{6})$/";

        if (preg_match($pat, $str)) {
            echo "<p>Телефон корректен</p>";
        } else {
            echo "<p>Телефон не корректен, проверьте правильность ввода!</p>";
        }
    }
    ?>
</body>

</html>