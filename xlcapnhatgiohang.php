<?php 
include "connect.php";
if ($_GET['soluong'] <1) {
    echo 
        "<script type='text/javascript'>
            window.alert('Bạn chưa chọn số lượng sản phẩm');
            window.location.href='shoping-cart.php';
        </script>";
}
$soluong = $_GET['soluong'];
$dongia = $_GET['dongia'];
$masp = $_GET['masp'];
$mahoadon = $_GET['mahoadon'];

$sql = "UPDATE chitiethoadon set chitiethoadon.dongia = ".$dongia.", chitiethoadon.soluongmua=".$soluong." where mahoadon = ".$mahoadon." and masp = ".$masp;
$sql2 = "UPDATE sanpham set soluong = soluong - ".$soluong." where masp = ".$masp;

if ($ketnoi->query($sql) === TRUE && $ketnoi->query($sql2) === TRUE) {
    header("location:shoping-cart.php");
}

//echo "$sql";

 ?>