<?php
	session_start();
	$manguoidung = $_SESSION['phienDangNhap'];
	include("connect.php");
	$nowdate=getdate();
	$strdate=$nowdate["year"]."-".$nowdate["mon"]."-".$nowdate["mday"];
	$date=date("Y-m-d", strtotime($strdate));

	$mahoadon = $_GET['mahoadon'];
	$tongtien = $_GET['tongtien'];
	$ghichu = $_GET['ghichu'];

	//lấy lại sohoadon, mahang can dat
	$sql="update hoadon set trangthaihoadon=1, ghichudonhang = '".$ghichu."', tongtien = ".$tongtien."  where manguoidung='".$manguoidung."' and trangthaihoadon=0";
	//set gia và so luong
	echo "$sql";

	if($ketnoi->query($sql)===TRUE)
	{
		//$sql2="update Chitietsanpham set Chitietsanpham.giaban=Sanpham.gia, Chitietsanpham.soluong=1 from Sanpham where sohoadon= ".$_GET["shd"];
		// if($ketnoi->query($sql2)===TRUE)
		// {
		header("location:shoping-cart.php");
		// }
		// else
		// 	echo "lỗi";

	}
	else
	{
		echo "Loi";
	}
	$ketnoi->close();
?>