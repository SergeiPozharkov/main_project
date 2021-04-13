<?php

include "Persona.php";
include "Worker.php";
include "Student.php";
include "Engineer.php";

$worker = new Worker("Anton", "35");
echo $worker->say() . "<br>";
echo $worker->doJob();
echo "<br>";

$student = new Student("Egor", "20");
echo $student->say() . "<br>";
echo $student->doJob();
echo "<br>";

$engineer = new Engineer("Sergey", "23");
echo $engineer->say() . "<br>";
echo $engineer->doJob();
