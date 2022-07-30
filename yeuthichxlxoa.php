<?php 
session_start();
include("connect.php");
$masp=$_GET["masp"];
$manguoidung = $_SESSION['phienDangNhap'];


$sql="delete from yeuthich where masp='".$masp."' and manguoidung = ".$manguoidung;

if($ketnoi->query($sql)===TRUE)
{
	header("location:yeuthich.php");
}
else
{
	echo "$sql";
	//header("location:shoping-cart.php");
}
$ketnoi->close();
?>