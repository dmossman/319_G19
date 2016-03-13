<?php
session_start();
//echo "----------START OF UPDATPOSTS.PHP---------";
//$_SESSION["username"];
//var_dump($_REQUEST)

$posts = json_decode(file_get_contents("posts.txt"));
 for($i = 0;$i<count($posts);$i++) {
	if($posts[$i]->id == $_REQUEST["id"]){
		$posts[$i]->message = $_REQUEST["message"];
		file_put_contents("posts.txt",json_encode($posts));
		echo file_get_contents("posts.txt");
		return;
	} else {
		echo "failure";
	}
}
//echo "-----------END OF UPDATPOSTS.PHP----------";
?>