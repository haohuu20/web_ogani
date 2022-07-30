<?php 
    session_start();
    include '../connect.php';
    if(!isset($_SESSION['phienDangNhap'])) {
        echo "
            <script type='text/javascript'>
                // window.alert('Bạn không được phép truy cập, hãy đăng nhập!');
                window.location.href='../dangnhap.php';
            </script>
        ";

    }
    //echo $_SESSION['phienDangNhap'];
;?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cài đặt</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="style.css">

	</style>
</head>
<body>
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div id="divTaiKhoan" >
			<a href="../index.php" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span> Trang chủ</a>
		</div>
		<div id="divTimKiem">
			<form class="example" method="get">
				<input type="text" id="search" class="form-control" placeholder="Search.." name="search">
				<button type="submit" id="btnSearch" class="btn btn-success"><i class="fa fa-search"></i></button>
			</form>
		</div>
		<div id="dsTaiKhoan">					
			<?php 
			
			$sqlAll = "SELECT * from nguoidung";
			$ketquaAll = $ketnoi ->query($sqlAll);
			$tongSoBanGhi = $ketquaAll->num_rows;
			$slBanGhiMoiTrang = 15;
			$soLuongTrang = Ceil($tongSoBanGhi/$slBanGhiMoiTrang);
			if (!isset($_GET['trang'])) {
				$trang = 1;
			}
			else{
				$trang = $_GET['trang'];
			}
			$offset = ($trang - 1)*$slBanGhiMoiTrang;
			$sqlSelect = "SELECT * from nguoidung order by quyen asc LIMIT $slBanGhiMoiTrang OFFSET $offset";
			$ketqua = $ketnoi ->query($sqlSelect);
			$search = "";

			//Tìm kiếm
			if (isset($_GET['search'])) {
				$search = $_GET['search'];
				if (strlen(trim($search)) == "")  {
					//
				}
				else{
					$sqlAll = "SELECT * from nguoidung where tennguoidung like '%$search%'";
					$ketquaAll = $ketnoi ->query($sqlAll);
					if ($ketquaAll->num_rows > 0) {
						$tongSoBanGhi = $ketquaAll->num_rows;
						$soLuongTrang = Ceil($tongSoBanGhi/$slBanGhiMoiTrang);
						$offset = ($trang - 1)*$slBanGhiMoiTrang;

						$sqlSelect = "SELECT * from nguoidung where tennguoidung like '%$search%' LIMIT $slBanGhiMoiTrang OFFSET $offset";
						$ketqua = $ketnoi ->query($sqlSelect);
					}
					else{
						echo "<script> alert('Không có kết quả!') </script>";
						$search = "";
					}
					
				}
			}

			if($ketqua->num_rows >0){
			?>
				<table class="table table-bordered table-hover">
					<tr class="success">
						<th>STT</th>
						<th>Tên tài khoản</th>
						<th>Số điện thoại</th>
						<th>Địa chỉ</th>
						<th>Email</th>					
						<th>Hoạt động</th>
						<th>Quyền</th>
						<th>Thao tác</th>
					</tr>
			<?php
					$stt = $slBanGhiMoiTrang*($trang -1) + 1;	
				while ($banGhi = $ketqua->fetch_assoc()) {
			?>	
					<tr>
						<td><?php echo $stt ?></td>
						<td><?php echo $banGhi["tennguoidung"] ?></td>			
						<td><?php echo $banGhi["Sđt"] ?></td>
						<td><?php echo $banGhi["diachi"] ?></td>
						<td><?php echo $banGhi["emailnguoidung"] ?></td>
						<!-- <td><?php echo $banGhi["hoatdong"] ?></td> -->
						<form action="quanlytaikhoan.php" method="get">
							<td><select name="hoatDong">
								<option value="0" <?php if($banGhi['hoatdong'] == 0) echo "selected"; ?> >Hoạt động</option>
								<option value="1" <?php if($banGhi['hoatdong'] == 1) echo "selected"; ?>>Khóa</option>
								<option value="2" <?php if($banGhi['hoatdong'] == 2) echo "selected"; ?>>Xóa</option>
							</select></td>	
							
									
							<td><select name="quyen">
								<option value="1" <?php if($banGhi['quyen'] == 1) echo "selected"; ?> >Admin</option>
								<option value="2" <?php if($banGhi['quyen'] == 2) echo "selected"; ?>>Khách</option>
							</select></td>	
							<input type="hidden" name="suaTenTaiKhoan" value="<?php echo $banGhi["tennguoidung"] ?>">
						<td> 
							<button type="submit" class="btn btn-success"> Sửa</button>
							<a href="quanlytaikhoan.php?xoaTenTaiKhoan=<?php echo $banGhi["tennguoidung"]; ?>" id = "xoa" class="btn btn-danger" onclick = "xoa(this)" >Xóa </a>
						</td>
						</form>
					</tr>
			<?php 
					$stt++;
				}
			}
			?>
				</table>

				<ul class="pagination">
			<?php
					$i = 1;
					while ($i <= $soLuongTrang) 
					{	 
			 ?>
						<li><a <?php echo "href='dstaikhoan.php?trang=$i&search=$search'"; ?>><?php echo $i; ?></a></li>
			<?php 
						$i++;
					}
			?>
		   		</ul>
		</div>
	</div>
	<div class="col-sm-2"></div>

	<script type="text/javascript">	
		function xoa(id) {
			if (confirm("Bạn có chắc muốn xóa tài khoản này không?")) {
				//
			}
			else{
				id.href = "#";
			}
		}
	</script>
</body>
</html>
