<?php

$str = "Lorem ipsum dolor sit amet,     consectetur adipiscing elit.      Proin pellentesque sodales ligula,    
sit amet molestie tortor luctus hendrerit.   Mauris   tincidunt sed mauris sit amet egestas.
 Vestibulum pharetra libero id ipsum mattis commodo. Suspendisse potenti. Phasellus nisl leo,   
 tempor quis ipsum sed, suscipit rutrum velit.    Pellentesque eu nulla et nulla finibus iaculis. 
 Cras scelerisque feugiat elit quis elementum. Sed in rutrum magna. Curabitur pulvinar urna nec lectus vehicula fringilla. 
 In tincidunt nec nisi eu molestie. Donec ut enim imperdiet, euismod mauris venenatis, dapibus nisi.     
 Pellentesque viverra lectus vel      nibh lobortis,      ut sagittis leo volutpat.   /n";
$counter = 0;
do {
    $str =  str_replace("  ", " ", $str, $counter);
} while ($counter > 0);
echo $str;
