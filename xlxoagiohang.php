<?php 
session_start();
include("connect.php");
$masp=$_GET["masp"];
$mahoadon = $_GET["mahoadon"];
$soluong = $_GET["soluong"];

$sql="delete from chitiethoadon where masp='".$masp."' and mahoadon = '".$mahoadon."'";

$sqlcapnhat = "UPDATE sanpham set soluong = soluong + ".$soluong." where masp = ".$masp;
if($ketnoi->query($sql)===TRUE && $ketnoi->query($sqlcapnhat)===TRUE)
{
	header("location:shoping-cart.php");
}
else
{
	header("location:shoping-cart.php");
}
$ketnoi->close();
?>