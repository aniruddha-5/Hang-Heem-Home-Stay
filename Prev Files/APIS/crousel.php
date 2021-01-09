<?php
header("Access-Control-Allow-Origin: *");
header ('Content-Type: application/json');
 
$mysqli = new mysqli('localhost', 'dipakkole', 'A@768699b', 'com20') or die(mysqli_error($mysqli));
                $sql = mysqli_query($mysqli,"SELECT `img` as img FROM `carousel` order by `date` desc ");
$data = array();
while ($row = mysqli_fetch_object($sql))
{
    array_push($data, $row);
}
echo json_encode($data);

?>