<?php
include 'conn.php';
$name=$_POST('name');
$age=$_POST('age');
$pass=$_POST('pass');
$birth=$_POST('birth');
$insert="INSERT INTO `users`( `name`, `age`, `password`, `birthday`) VALUES ($name,$age,$pass,$birth";
$query=$conn->query($insert);
header('location:../');
?>