<?php


$user='root';
$pass='';
$db='weather';

$db=mysqli_connect('localhost','root','','weather')or die("unable to connect");
// to cheack if its conection to datadase
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }else{
     echo "hi";
 }
?>