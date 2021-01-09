<?php include('../db_config.php') ?>



<?php
header("Access-Control-Allow-Origin: *");
header ('Content-Type: application/json');
 
                $sql = mysqli_query($mysqli,"SELECT * FROM `documents` ORDER BY id DESC
                LIMIT 5 ");
$data = array();
while ($row = mysqli_fetch_object($sql))
{
    array_push($data, $row);
}
echo json_encode($data);

?>