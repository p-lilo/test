<?php
include 'conn.php';

$name=$_POST['username'];
$price=$_POST['price'];
$amount=$_POST['amount'];
$brand=$_POST['brand'];


$insert="INSERT INTO `products`( `name`, `price`, `amount`, `brand`) VALUES ('$name','$price','$amount','$brand')";

$query=$conn->query($insert);
//add img
$last_id=$conn->insert_id;
for($i=0;$i<count($_FILES["img"]["name"]);$i++){
    $img_name=$_FILES['img']['name'][$i];
    $temp=$_FILES['img']['tmp_name'][$i];
    if($_FILES['img']['error'][$i]==0){
        $extention=['jpg','png','jpeg','gif'];
        $ext=pathinfo($img_name,PATHINFO_EXTENSION);
        if(in_array($ext,$extention)){
            if($_FILES['img']['size'][$i]<(4*1024*1024)){
                $new_name=rand(0,1000000).time().".$ext";
                move_uploaded_file($temp,"../img/makeup/$new_name");
                $conn->query("INSERT INTO `product_image`(`pro_id`, `image`) VALUES ('$last_id','$new_name')");
            }else{
                echo 'img is too large';    
            }
        }else{
        echo 'pls upload correct path';

        }

    }else{
        echo 'pls upload correct img';
    }

}


 header('location:../products.php');

?>