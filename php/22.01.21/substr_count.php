<?php

$data = file_get_contents("https://www.onliner.by/");

echo substr_count($data, "onliner");
