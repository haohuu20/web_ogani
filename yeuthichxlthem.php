<?php 
session_start();
if(!isset($_SESSION['phienDangNhap'])) {
        echo "<script type='text/javascript'>
            window.alert('Bạn phải đăng nhập tài khoản');
            window.location.href='dangnhap.php';
        </script>";
    } 
$manguoidung = $_SESSION['phienDangNhap'];
include("connect.php");
$nowdate=getdate();
$strdate=$nowdate["year"]."-".$nowdate["mon"]."-".$nowdate["mday"];
$date=date("Y-m-d", strtotime($strdate));

$masp=$_GET["masp"];

$sql_search_sp="select masp from yeuthich where masp='".$masp. "' and manguoidung = ".$manguoidung;

$result2=$ketnoi->query($sql_search_sp);
if($result2->num_rows>0)
{
	 echo "<script type='text/javascript'>
        window.alert('Bạn đã thích sản phẩm này!');
        window.location.href='shop-grid.php';
    </script>";
}
else
{
	$sql_insert_sp="insert into yeuthich(masp, manguoidung) values(".$masp.",'".$manguoidung. "')";
	if($ketnoi->query($sql_insert_sp)===TRUE)
	{
	
		header("location:shop-grid.php");
	}
	else
	{
		//echo $sql_insert_sp;
		echo "Lỗi thêm yêu thích";
	}
}



$ketnoi->close();
 ?>