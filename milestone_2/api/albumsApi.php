<?php 

require_once "../data/albums.php";


header("Content-Type: application/json");
//var_dump($albums)
echo json_encode($albums);

?>