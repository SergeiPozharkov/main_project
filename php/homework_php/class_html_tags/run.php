<?php

include "Br.php";
include "Textarea.php";
include "Input.php";
include "Table.php";
include "Form.php";

$br = new Br();
echo $br
    ->setText("text")
    ->setTagName("br")
    ->html();

$textarea = new Textarea();
echo $textarea
    ->setTagName("textarea")
    ->setRows(10)
    ->setCols(45)
    ->setName("area")
    ->html();

echo "<br><br>";

$input = new Input();
echo $input
    ->setTagName("input")
    ->setType("text")
    ->setValue("text")
    ->html();

echo "<br><br>";

$table = new Table();
echo $table
    ->setTagName("table")
    ->setBorder(1)
    ->setData(["Anton", "Vitaliy", "Nikolay", "Anatoliy", "Sergey", "Max"])
    ->setTr("tr")
    ->setTd("td")
    ->html();

echo "<br><br>";

$form = new Form();
echo "<h1>Это форма</h1><br>";
echo $form
    ->setForm("form")
    ->setAction("start.php")
    ->setMethod("post")
    ->setTextarea("textarea")
    ->setRows(10)
    ->setCols(45)
    ->setName("area")
    ->setInput("input")
    ->setType("submit")
    ->setValue("Send")
    ->html();
