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
//Luu y:
//Them vao gio hang
$masp=$_GET["masp"];
//B1:lay lai ma hang can them
//B2: Thuc hien truy van insert vao bang Dondathang voi cac thong tin
//Ngaychonhang=ngayhientai, nguoidathang=session("username"), chedo=0

//Buoc 1-- kiểm tra gio hang co chua---sua
$sql_search_hoadon="select mahoadon from hoadon where manguoidung='".$manguoidung."' and trangthaihoadon=0"; 
$result1=$ketnoi->query($sql_search_hoadon);
if($result1->num_rows >0)//buoc 2
{
	$row=$result1->fetch_assoc();
	//kiem tra trong giỏ hàng đó có sản phẩm chọn chưa----------sua lai-----
	$sql_search_sp="select hoadon.mahoadon from chitiethoadon join hoadon on chitiethoadon.mahoadon = hoadon.mahoadon where masp='".$masp. "' and trangthaihoadon=0 and manguoidung= '".$manguoidung."'";
	//echo $sql_search_sp;
	$result2=$ketnoi->query($sql_search_sp);
	if($result2->num_rows>0)
	{
		 echo "<script type='text/javascript'>
            window.alert('Đã tồn tại sản phẩm trong giỏ hàng');
            window.location.href='shop-grid.php';
        </script>";
	}
	else
	{
		$sql_insert_sp="insert into chitiethoadon(mahoadon,masp) values(".$row["mahoadon"].",'".$masp. "')";
		if($ketnoi->query($sql_insert_sp)===TRUE)
		{
			//echo "Thêm vào giỏ hàng thành công";
			header("location:shop-grid.php");
		}
		else
		{
			echo "Lỗi thêm chi tiet đặt hàng";
		}
	}
}
else //buoc 3
{
	//thêm đơn đặt hàng mới
	$sql_insert_dondathang="insert into hoadon( manguoidung, trangthaihoadon) values('".$manguoidung."',0)"; 
	echo $sql_insert_dondathang;
	if($ketnoi->query($sql_insert_dondathang)===TRUE)
	{	
		//lấy lại số hóa đơn vừa thêm.
		$sql_search_hoadon="select mahoadon from hoadon where manguoidung='".$manguoidung."' and trangthaihoadon=0 ";
		$result1=$ketnoi->query($sql_search_hoadon);
		$row=$result1->fetch_assoc();
		//thêm sản phẩm
		$sql_insert_sp="insert into chitiethoadon(mahoadon,masp) values(".$row["mahoadon"].",'".$masp. "')";

		if($ketnoi->query($sql_insert_sp)===TRUE)
		{
			//echo "Thêm vào giỏ hàng thành công ...";
			header("location:shoping-cart.php");
		}
		else
		{
			echo "Lỗi thêm chi tiet đặt hàng";
		}
	}
	else
	{
		echo "Lỗi thêm đơn đặt hàng";

	}

}

$ketnoi->close();
 ?>