<?php include('../db_config.php') ?>



<?php
header("Access-Control-Allow-Origin: *");
header ('Content-Type: application/json');


$name = $_GET['id'];
$pass = $_GET['pass'];
// echo $pass;
$sql ="INSERT INTO `login`(`username`, `pass`) VALUES ('$name','$pass') ";
$mysqli->query($sql);
$sql ="INSERT INTO `permission`(`name`, `constitution`, `organization`, `govtorders`, `publication`, `annualreport`, `gallery`, `govtcolleges`, `archive`, `notice`, `carousel`) VALUES ('$name','False','False','False','False','False','False','False','False','False','False') ";
$mysqli->query($sql);
$data = array();

while ($row = mysqli_fetch_object($sql))
{
    array_push($data, $row);
}
echo json_encode($data);

?>