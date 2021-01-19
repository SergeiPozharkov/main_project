<?php

echo $counter = file_get_contents("file.txt");

// echo $counter += 1;

file_put_contents("file.txt", ++$counter);
