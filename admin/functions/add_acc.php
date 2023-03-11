<?php
include 'conn.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$confirm_pass=$_POST['confirm_pass'];
if($confirm_pass==$pass){
$insert_newacc=$conn->query("INSERT INTO `admins`(`first_name`, `last_name`, `email`, `password`) VALUES ('$fname','$lname','$email','$pass')");
header('location:../login.php');
}
else{
    ?>
    <div class="alert alert-danger" role="alert">
 check your password
</div>
<?php
}
?>