<?php




header("Access-Control-Allow-Origin: *");
header ('Content-Type: application/json');
 
 
 $category = $_GET['categoryid'];
 
$mysqli = new mysqli('localhost', 'dipakkole', 'A@768699b', 'com20') or die(mysqli_error($mysqli));
                $sql = mysqli_query($mysqli,"SELECT * FROM `gallery` where `categoryid`=$category ORDER BY Date DESC ");
$data = array();
while ($row = mysqli_fetch_object($sql))
{
    array_push($data, $row);
}
echo json_encode($data);

?>