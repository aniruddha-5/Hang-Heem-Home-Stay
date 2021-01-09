<?php
$document =$_FILES['document']['name'];
$target = "WBDocuments/".basename($_FILES['document']['name']);
$name = $_POST['name'];
$catagory = $_POST['catagory'];
$publisherName = $_POST['publisherName'];
echo $name;

$mysqli = new mysqli('localhost', 'root', '', 'com20') or die(mysqli_error($mysqli));
$sql ="INSERT INTO `documents`(`name`, `catagory`, `document`,`publisherName`) VALUES ('$name','$catagory','$document','$publisherName') ";
$mysqli->query($sql);
move_uploaded_file($_FILES['document']['tmp_name'],$target);
$sql ="INSERT INTO `userDetails`(`name`, `catagory`) VALUES ('$publisherName','$catagory') ";
$mysqli->query($sql);



?>