<?php

header('Content-type: application/pdf');

header('Content-Disposition: attacment; filename="test.pdf"');
readfile("test.pdf");