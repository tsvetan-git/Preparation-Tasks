<?php

$number = isset($_POST['input']) ? $_POST['input'] : 0;

$cars = ['Audi', 'BMW', 'Subaru', 'Honda', 'Toyota', 'Hyunday', 'Ford', 'Chevrolet', 'Volkswagen', 'Nissan'];

$count = count($cars) - 1;

$array = [];

	for ($i = 0; $i < $number; $i++) {
		$j = mt_rand(0, $count);
		$array[] = $cars[$j];
		}
		
echo json_encode($array);
