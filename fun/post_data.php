<?php
    include 'conn.php';
    $name = $_POST["name"];
    $email=$_POST["email"];
    $msg=$_POST["msg"];
   
    $insert="INSERT INTO `message`( `name`, `email`, `msg`) VALUES ('$name','$email','$msg')";
    $query=$conn->query($insert);
    if($query){
     echo "we are received your message";

    } else{
    echo $conn-> error;
    }
    ?>
