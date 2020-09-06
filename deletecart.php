<?php
session_start();
if(!isset($_SESSION['username']))
{
		 echo "<script>window.location.assign('userlogin.php');</script>";
}

$conn=mysqli_connect('localhost','id13450155_root','Root-12345678910','id13450155_hashmi');


$date =date('j/m/Y');
$cartid=$_POST['cartid'];

$del="DELETE FROM `cart` WHERE `cart`.`id` = $cartid";
 $res=mysqli_query($conn,$del);
 
		 echo "<script>window.location.assign('cart.php');</script>";
?>