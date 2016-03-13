<?php
session_start();

//$_SESSION["username"];
//sends an array of json objects each representing a post

$posts = file_get_contents("posts.txt");
$data = json_decode($posts);
$arr = array();
$size = count($data);
for($i=0;$i<$size; $i++) {
	echo $data[$i]->message;
}

?>