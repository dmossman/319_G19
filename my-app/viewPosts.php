<?php
session_start();

//$_SESSION["username"];
//sends an array of json objects each representing a post

$posts = file_get_contents("posts.txt");
$data = json_decode($posts);
$arr = array();
$size = count($data);
for($i=0;$i<$size; $i++) {
	echo "<tr><td>".$data[$i]->title."<br>".$data[$i]->author."<br>".
	$data[$i]->time."<br>".$data[$i]->message."<br>".
	"<input id=\"button".$i."\" type=\"button\" value=\"Update\"/><br><br></td></tr>";
}

?>