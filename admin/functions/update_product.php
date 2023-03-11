<?php
include 'conn.php';

$ID=$_POST['id'];
$name=$_POST['username'];
$price=$_POST['price'];
$amount=$_POST['amount'];

$update="UPDATE `products` SET `name`='$name',`price`='$price',`amount`='$amount' WHERE id=$ID";
$query=$conn->query($update);
if($query){
 header('location:../products.php');
} else{
echo $conn-> error;
}
?>