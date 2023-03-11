<?php
include 'conn.php';

$name=$_POST['username'];
$age=$_POST['age'];
$pass=sha1($_POST['pass']);
$birth=$_POST['birthday'];


$insert="INSERT INTO `users`( `name`, `age`, `password`, `birthday`) VALUES ('$name','$age','$pass','$birth')";
$query=$conn->query($insert);
if($query){
 header('location:../users.php');
} else{
echo $conn-> error;
}
?>