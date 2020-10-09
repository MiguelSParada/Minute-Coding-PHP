<?php
$fh = fopen("sample.txt", "w");
$text = "I was written";
fwrite($fh, $text);
fclose($fh);

?>