<?php

if ($_POST["login"] == "Admin" && $_POST["pass"] == "admin") {
    header("Location: crud/show.php");
} else {
    include "include/include_header.php";
    echo "<div class='alert alert-danger' role='alert'><h1>Вы не админ!</h1></div>";
    echo "<a class='btn btn-primary' href='opros.php'>Вернуться на страницу с опросом</a>";
    include "include/include_footer.php";
}

