<?php

include 'conn.php';
if($_SERVER('REQUEST_METHOD')=="POST"){
 
$Id=$_POST['id'];
$name=$_POST['username'];
$position=$_POST['position'];
$office=$_POST['office'];
$age=$_POST['age'];
$start_date=$_POST['start_date'];
$salary=$_POST['salary'];
$update="UPDATE admins
 SET `name`='$name',`position`='$position',`office`='$office',`age`='$age',`start_date`='$start_date',`salary`='$salary'
 WHERE id=$Id";

$query=$conn->query($update);

if($query){
 header('location:../admins.php');
} else{
echo $conn-> error;
}
}
else{
    header('location:../admins.php');
    exit();
}
?>