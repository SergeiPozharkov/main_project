<?php

session_start();
$_SESSION['username'] = $_POST['name'];
header("location: main.php");
