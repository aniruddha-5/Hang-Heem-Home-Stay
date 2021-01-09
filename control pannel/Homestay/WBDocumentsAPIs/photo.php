<?php include('../db_config.php') ?>

<?php
header("Access-Control-Allow-Origin: *");
header ('Content-Type: application/json');
 
                $sql = mysqli_query($mysqli,"SELECT * FROM `image` ORDER BY id DESC
                ");
$data = array();
while ($row = mysqli_fetch_object($sql))
{
    array_push($data, $row);
}
echo json_encode($data);

?>