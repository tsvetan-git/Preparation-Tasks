<?php
function test(){
$test = [];
	for($i=0; $i<10; $i++){
	$test[$i]= rand(1,50);
	}
return $test;
}

$array = test();
header('Content-Type:json');
echo json_encode($array);