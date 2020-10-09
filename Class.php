<?php
$object = new Info;

$object ->name ="Miguel";
$object ->role = "Instructor";
print_r($object);


class Info {
	public $name, $role;
	
}

?>