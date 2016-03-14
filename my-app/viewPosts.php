<?php
session_start();

//$_SESSION["username"];
//sends an array of json objects each representing a post

$posts = file_get_contents("posts.txt");
$data = json_decode($posts);
$arr = array();
$size = count($data);
for($i=0;$i<$size; $i++) {
	echo "<tr><td><div>".$data[$i]->title."</div><div>".$data[$i]->author."</div><div>".
	$data[$i]->time."</div><div>".$data[$i]->message."</div><div>".
	"<input id=\"button".$i."\" class=\"updateButton\" type=\"button\" value=\"Update\"/><br><br></td></tr>";
}

?>