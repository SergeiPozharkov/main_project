<?php

//echo $_POST['click'];

for ($i = 1; $i <= 9; $i++) {
    if ($_POST['click'] == $i) {
        echo 'X';
    }
}