<?php
session_start();

//$_SESSION["username"];
//sends an array of json objects each representing a post

echo file_get_contents("posts.txt");
?>