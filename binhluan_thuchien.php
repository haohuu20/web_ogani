<?php 
session_start();
include "connect.php";
if (isset($_POST['message'])) {
	$manguoidung = $_SESSION['phienDangNhap'];
	$bl = $_POST['message'];
	$masp = $_POST['masp'];

	$sql = "INSERT INTO binhluan(masp ,manguoidung , noidungbinhluan) VALUES('$masp' ,'$manguoidung','$bl')";
	//echo "$sql";
	if ($ketnoi->query($sql) == true) {
		header("location: shop-details.php?masp=$masp");
	}
}

 ?>