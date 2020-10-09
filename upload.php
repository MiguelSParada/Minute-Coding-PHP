<?php

if ($_FILES)
{
	$sourced = $_FILES["photo"]["name"];
	move_uploaded_file($_FILES["photo"]["tmp_name"], $sourced);
	echo "File Uploaded '$sourced' <br> <img src=$sourced>";
	
}


?>






