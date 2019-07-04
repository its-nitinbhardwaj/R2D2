<?php
 $terms = $_GET['data'];

 $data = file_get_contents("https://api.themoviedb.org/3/search/movie?query=".$terms."&api_key=e5c532c28c1a8dfed1129e7f4e7bad1e");


 $arr = array();
 $i=0;
 foreach(json_decode($data)->results as $item)
 {
 	$arr[$i] = array('id' => $i,'text' => $item->title);
 	$i++;
 }

 echo json_encode($arr);

?>
