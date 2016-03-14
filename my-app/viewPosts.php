<?php
session_start();

//$_SESSION["username"];
//sends an array of json objects each representing a post

$posts = file_get_contents("posts.txt");
$data = json_decode($posts);
$arr = array();
$size = count($data);
for($i=0;$i<$size; $i++) {
	echo "<tr><td><div>".$data[$i]->title."</div><br><div>".$data[$i]->author."</div><br><div>".
	$data[$i]->time."</div><br><div>".$data[$i]->message."</div><br><div>".
	"<input id=\"updateButton\" type=\"button\" value=\"Update\"/><br><br></td></tr>";
}

?>