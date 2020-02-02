
<?php
include 'config.php';
include 'class.horses.php';
header('Content-Type: application/json');
$horses = new Horses();
$list=$horses->get_Horses();
echo "{\"Horses\":";
echo json_encode($list);
echo "}";
?>