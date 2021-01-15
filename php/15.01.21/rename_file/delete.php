<?php

if (is_file("for_delete.txt")) {
    unlink("for_delete.txt");
}else {
    echo 'Файла который вы хотите удалить не обнаружен !';
}
