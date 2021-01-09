<?php include('../../db_config.php') ?>


<?php
header("Access-Control-Allow-Origin: *");
header ('Content-Type: application/json');


$id=$_GET['id'];
// echo $pass;
$sql ="DELETE FROM `carousel` WHERE id='$id' ";
$mysqli->query($sql);
$data = array();


echo json_encode($data);

?>