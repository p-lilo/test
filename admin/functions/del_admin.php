<?php
include 'conn.php';
$ID=$_GET['id'];
$sql="DELETE FROM `admins` where id=$ID";
$conn->query($sql);
header('location:../admins.php')
?>