<?php
function del(){
include 'conn.php';
$id=$_POST['id'];
$del=$conn->query("DELETE FROM `message` WHERE id=$id");
if($del){
echo "you deleted this message!";
}else{
$conn->error;
}
}
?>