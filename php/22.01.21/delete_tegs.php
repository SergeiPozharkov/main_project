<?php

$text = '<p>Параграф.</p>
<!-- Comment -->
Еще <b>немного</b> текста';
echo strip_tags($text);
echo "\n\n-------\n";
// не удалять <p> и <b>
echo strip_tags($text, '<p><b>');
