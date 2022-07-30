<?php 
	include '../connect.php';
	if (isset($_GET['mahoadon'])) {
		$mahoadon = $_GET['mahoadon'];
		$sql_delete = "UPDATE hoadon set trangthaihoadon = 2 where mahoadon = ".$mahoadon;
		if ($ketnoi->query($sql_delete)) {
			header("location:hoa_don_chua_xl.php");
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
 ?>