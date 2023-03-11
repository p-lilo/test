<?php
include 'conn.php';

$name=$_POST['username'];
$position=$_POST['position'];
$office=$_POST['office'];
$age=$_POST['age'];
$start_date=$_POST['start_date'];
$salary=$_POST['salary'];

$insert="INSERT INTO `admins`( `name`, `position`, `office`, `age`, `start_date`, `salary`) VALUES ('$name','$position','$office','$age','$start_date','$salary')";
$query=$conn->query($insert);
if($query){
 header('location:../admins.php');
} else{
echo $conn-> error;
}
?>
