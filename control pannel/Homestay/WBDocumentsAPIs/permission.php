
<?php include('../db_config.php') ?>


<?php
header("Access-Control-Allow-Origin: *");
header ('Content-Type: application/json');
 

$name = $_GET['name'];
// echo $name;
$sql = mysqli_query($mysqli,"SELECT * FROM `permission` WHERE name='$name' ");
$data = array();
while ($row = mysqli_fetch_object($sql))
{
    array_push($data, $row);
}
echo json_encode($data);

?>