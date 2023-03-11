<?php

function edit_msg(){
    include 'conn.php';
    $id=$_POST['id'];
    $select=$conn->query("SELECT * FROM `message` WHERE id=$id");
    $msg=$select->fetch_assoc();
    $update=$conn->query("UPDATE `message` SET `status`='1' WHERE id=$id");
    if($update){
        echo $msg['msg'];
    }else{
        $conn->error;
    }
}
if($_POST['fun']=='read_msg'){
 edit_msg();
}

?>