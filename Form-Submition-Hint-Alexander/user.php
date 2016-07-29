<?php
$name = isset($_POST['name']) ? $_POST['name'] : 0;
$info = isset($_POST['someOtherInfo']) ? $_POST['someOtherInfo'] : 0;



echo json_encode('You send me ' . $name . ' and ' . $info);