<?php 
session_start();
include "../connect.php";
if (isset($_GET['masp']) && isset($_GET['manguoidung']) && isset($_GET['thoigianbinhluan']) ) {
	$masp = $_GET['masp'];
	$manguoidung = $_GET['manguoidung'];
	$thoigianbinhluan = $_GET['thoigianbinhluan'];

	$sql_delete = "DELETE from binhluan where masp = '$masp' and manguoidung = '$manguoidung' and thoigianbinhluan = '".$thoigianbinhluan."'";
	if ($ketnoi->query($sql_delete)  == true) {
		//echo $sql_delete;
		header("location: binh_luan.php");
	}
	else{
		echo $sql_delete;
		echo "Lỗi không xóa được";
	}
}

 ?>