<?php 

$array = [
		"1.jpg",
		"2.jpg", 
		"3.jpg", 
		"4.jpg", 		
		"5.jpg" ];


$secondArr = [];



for ($i = 0; $i < 3; $i++) {
		shuffle($array);
		$secondArr = array_slice($array, 0, 3);
} 
echo json_encode($secondArr);