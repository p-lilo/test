<?php
include 'conn.php';
$ID=$_GET['id'];
$sql="DELETE FROM `products` WHERE id=$ID";
$query=$conn->query($sql);
if($query){
header('location:../products.php');
}else{
    echo $conn-> error;
}
?>