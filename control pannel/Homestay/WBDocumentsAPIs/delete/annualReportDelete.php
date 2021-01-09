<?php include('../../db_config.php') ?>


<?php
header("Access-Control-Allow-Origin: *");
header ('Content-Type: application/json');


$id=$_GET['id'];
$name=$_GET['name'];
echo $name;
echo $id;
// echo $pass;
$sql ="DELETE FROM `anualreport` WHERE id='$id' ";
$mysqli->query($sql);
$sql ="DELETE FROM `documents` WHERE name='$name' ";
$mysqli->query($sql);
$data = array();


echo json_encode($data);

?>