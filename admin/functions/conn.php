<?php
$host='localhost';
$username='root';
$pass='';
$DB='full';
$conn=new mysqli($host,$username,$pass,$DB);
//arabic
$conn->set_charset('utf8');
?>