<?php
header("Access-Control-Allow-Origin: *");
header ('Content-Type: application/json');
 
$items = $_GET['items'];
$mysqli = new mysqli('localhost', 'dipakkole', 'A@768699b', 'com20') or die(mysqli_error($mysqli));
                $sql = mysqli_query($mysqli,"SELECT `name` as name , `catagory` as category , `document` as document , `date` as date  FROM `documents` order by `date` desc LIMIT $items");
$data = array();
while ($row = mysqli_fetch_object($sql))
{
    array_push($data, $row);
}
echo json_encode($data);

?>