<?php
include 'conn.php';
$Id=$_GET['id'];
$del="DELETE FROM `users` WHERE id=$Id";
$query=$conn->query($del);
if($query){
header('location:../users.php');
}else{
    $conn->error;
};
?>