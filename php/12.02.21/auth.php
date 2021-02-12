<?php

if (!isset($_SERVER['PHP_AUTH_USER']) && $_SERVER['PHP_AUTH_USER'] == "serge1000" && $_SERVER['PHP_AUTH_PW'] == "123") {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
} else {
    header("Location: welcom.php");
}

// header('WWW-Authenticate: Basic realm="Test Authentication System"');

// // header("Location: user.php");
// if ($_SERVER['PHP_AUTH_USER'] == "serge1000" && $_SERVER['PHP_AUTH_PW'] == "123") {
//     header("Location: welcom.php");
// } else {
//     header("Location: bye.php");
// }
