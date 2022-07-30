<?php 
	include '../connect.php';
	if (isset($_GET['xoaTenTaiKhoan'])) {
		$tenTaiKhoan = $_GET['xoaTenTaiKhoan'];
		$sql_delete = "DELETE from nguoidung where tennguoidung = '$tenTaiKhoan'";
		if ($ketnoi->query($sql_delete)) {
			header("location:nguoi_dung.php");
		}else{
			//echo "Lỗi truy vấn".$ketnoi->error;
			echo "
            <script type='text/javascript'>
                window.alert('Người dùng này đã từng đặt hàng không thể xóa!');
                window.location.href='nguoi_dung.php';
            </script>
        ";
		}
	}

	if (isset($_GET['suaTenTaiKhoan']) && (isset($_GET['hoatDong']) || isset($_GET['quyen']) ) ) {
		$tenTaiKhoan = $_GET['suaTenTaiKhoan'];
		$hoatdong = $_GET['hoatDong'];
		$quyen = $_GET['quyen'];
		$sql_update = "UPDATE nguoidung set hoatdong = $hoatdong, quyen = $quyen where tennguoidung = '$tenTaiKhoan'";
		if ($ketnoi->query($sql_update)) {
			header("location:nguoi_dung.php");
		}else{
			echo "Lỗi truy vấn".$ketnoi->error;
		}
	}

 ?>