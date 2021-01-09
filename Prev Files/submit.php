<?php
header("Access-Control-Allow-Origin: *");
header ('Content-Type: application/json');

$name=$_GET['name'];
$category=$_GET['category'];
$zone=$_GET['zone'];
$link=$_GET['link'];

$mysqli = new mysqli('localhost', 'dipakkole', 'A@768699b', 'com20') or die(mysqli_error($mysqli));
$sql ="INSERT INTO `colleges`(`collegeName`, `collegeCatagory`,`link`,`zone`) VALUES ('$name','$catagory','$link') ";
$mysqli->query($sql);

$data = array();
while ($row = mysqli_fetch_object($sql))
{
    array_push($data, $row);
}
echo json_encode($data);

?>