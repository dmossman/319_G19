<?php


$f = file("users.txt");
foreach ($f as &$value) {
	sscanf($value, "%s %s", $username, $password);
	if($_REQUEST["name"]==$username && $_REQUEST["password"]==$password){
		echo "success";
		return;
	}
}
echo "failure";


?>