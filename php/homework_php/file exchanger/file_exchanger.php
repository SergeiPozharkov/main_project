<?php
$dir = array_diff(scandir("files\\"), ['..', '.']);
rsort($dir);
// print_r($dir);

$patDoc = "/\.doc$/ui";
$patPdf = "/\.pdf/ui";
$patXlsx = "/\.xlsx/ui";
$patDocx = "/\.docx/ui";

foreach ($dir as $value) {
    if (preg_match($patDoc, $value)) {
        echo "<a href='files\\$value'><img src='images\imgdoc.png' alt='картинка'>$value</a><br><br>";
    } elseif (preg_match($patPdf, $value)) {
        echo "<a href='files\\$value'><img src='images\pdf.png' alt='картинка'>$value</a><br><br>";
    } elseif (preg_match($patXlsx, $value)) {
        echo "<a href='files\\$value'><img src='images\xlsx.png' alt='картинка'>$value</a><br><br>";
    } elseif (preg_match($patDocx, $value)) {
        echo "<a href='files\\$value'><img src='images\imgdocx.png' alt='картинка'>$value</a><br><br>";
    }
}
