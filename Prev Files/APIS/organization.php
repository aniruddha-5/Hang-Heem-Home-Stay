<?php
header("Access-Control-Allow-Origin: *");
header ('Content-Type: application/json');

$category = $_GET['category']; 
$type = $_GET['type']; 
 
$mysqli = new mysqli('localhost', 'dipakkole', 'A@768699b', 'com20') or die(mysqli_error($mysqli));
                $sql = mysqli_query($mysqli,"SELECT `name` as name,`department` as department,`img` as img,`designation` as designation,`email` as email,`phone` as phone FROM `organization` WHERE `catagory`='$category' && `type`='$type' order by `arrangeOrder` asc");
$data = array();
while ($row = mysqli_fetch_object($sql))
{
    array_push($data, $row);
}
echo json_encode($data);

?>