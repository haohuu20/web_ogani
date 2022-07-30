<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style>
      body{
        margin: 0;
        padding: 0;
  
        border-radius: 5px;
        font-family: sans-serif;
        background: #ecf0f1;
    }
    form{
     
        border-radius: 5px;
        background: #fff;
        padding: 20px;
    }
    .form-group1{
    position: relative;		    
    border-radius: 5px;
	}
	.form-group1 span{
	   position: absolute;
	   right: 15px;
	   top: 70%;
	   transform: translateY(-50%);
	   font-size: 20px;
	   cursor: pointer;
	   display: none;
	}
	.form-group1 input:valid ~ span{
	   display: block;
	}
	.form-group1 span i.hide-btn::before{
	   content: "\f070";
	}
	  
    </style>
</head>
<body>
	<table align="center">
	     <tr>
            <th>
			<div class="row">
				<form  method="get">
				<h3 style="color:red;"><span class="glyphicon glyphicon-shopping-cart"></span> Đăng ký</h3>
				<div class="form-group">
				    <label for="tennguoidung">Tên người dùng:</label>				    				
				    <input type="text" class="form-control" id="tennguoidung" name="tennguoidung" placeholder="Tên người dùng.." >
				</div>
				<div class="form-group">
			  	<div class="form-group1">
				    <label for="matKhau">Mật khẩu:</label>
				    <input type="password" class="form-control" id="matkhau" name="matkhau" placeholder="Nhập mật khẩu.." >
				    <span class="show-btn"><i id="showPassword1" class="fas fa-eye"></i></span>
				</div>
			</div>
			<div class="form-group">
				<div class="form-group1">
				    <label for="laiMatKhau">Nhập lại mật khẩu:</label>
				    <input type="password" class="form-control" id="laimatkhau" name="laiMatKhau" placeholder="Nhập lại mật khẩu..">
				    <span class="show-btn"><i id="showPassword2" class="fas fa-eye"></i></span>
				</div>
			</div>
				<div class="form-group">
				    <label for="email">Email:</label>
				    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com.." >
				</div>
				<div class="form-group">
				    <label for="diachi">Địa chỉ:</label>
				    <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Nhập địa chỉ.." >
				</div>
				<div class="form-group">
				    <label for="sdt">Số điện thoại:</label>
				    <input type="text" class="form-control" id="sdt" name="sdt"placeholder="Nhập số điện thoại.."  >
				</div>
				    <button id="btnThem" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Đăng ký</button>  
				    <button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Làm lại</button>
				    <a href="index.php" class="btn btn-primary"><span class="glyphicon  glyphicon-arrow-left"></span> Quay lại</a>
				</form>
		</div>
		</th>
	</tr>
</table>

	<?php 
		include 'connect.php';
		if (isset($_GET['tennguoidung'])) {		
			$tennguoidung = $_GET['tennguoidung'];

			$sql_check = "SELECT * from nguoidung where tennguoidung = '$tennguoidung'";
			$ketQuaKT = $ketnoi->query($sql_check);
			if($ketQuaKT->num_rows >0){		
	?>
	<script>
				alert("Tên tài khoản này đã tồn tại, hãy chọn tên tài khoản khác!");	
				//return false;					
	</script>
	<?php 		
	 		}
	 		else{
	 			$matkhau = $_GET['matkhau'];
	 			$email = $_GET['email'];
	 			$diachi = $_GET['diachi'];
	 			$sdt = $_GET['sdt'];
	 			$sql_insert = "INSERT INTO nguoidung(tennguoidung, emailnguoidung,matkhau, diachi,Sđt,quyen) values('$tennguoidung' ,'$email','$matkhau', '$diachi','$sdt', 2)";
	 			
	 			if ($ketnoi->query($sql_insert) === true) {
	 				session_start();
	 				$sqlmanguoidung = "SELECT manguoidung from nguoidung where tennguoidung = '".$tennguoidung."'";
                    $kq3 = $ketnoi->query($sqlmanguoidung);
                    $kq = $kq3->fetch_assoc();
                    $_SESSION['phienDangNhap'] = $kq['manguoidung'];  
                    $_SESSION['tentaikhoan'] = $tennguoidung;              		
	 				header("location:index.php");
	 ?>
	 <?php
	 			}
	 			else{
	 				echo "Lỗi truy vấn".$ketnoi->error;
	 			}
	 		}
	 	}
	 ?>	

	<script type="text/javascript">
	$(document).ready(function ()
	 {	
		$("#btnThem").click(function () 
		{
			if ($("#tennguoidung").val().trim() == "") 
			{
				alert('Tên người dùng không được bỏ trống!');
				$("#tenTaiKhoan").focus();
				return false;
			}
			if ($("#email").val().trim() == "") 
			{
				alert('Email không được bỏ trống!');
				$("#email").focus();
				return false;
			}

			if ($("#matkhau").val().trim() == "") 
			{
				alert('Mật khẩu không được bỏ trống!');
				$("#matkhau").focus();
				return false;
			}
			if ($("#matkhau").val().trim().length < 6) {
	            alert("Mật khẩu phải có ít nhất 6 ký tự");
	            $("#password1").focus()
	            return false
	        }

	        if ($("#laimatkhau").val().trim() == "") 
			{
				alert('Nhập lại mật khẩu không được bỏ trống!');
				$("#laimatkhau").focus();
				return false;
			}
			if ($("#matkhau").val().trim() !== $("#laimatkhau").val().trim()) 
			{
				alert('Nhập lại mật khẩu không đúng!');
				$("#laimatkhau").focus();
				return false;
			}

			if ($("#diachi").val().trim() == "") 
			{
				alert('Địa chỉ không được bỏ trống!');
				$("#diachi").focus();
				return false;
			}
			if ($("#sdt").val().trim() == "") 
			{
				alert('Số điện thoại không được bỏ trống!');
				$("#sdt").focus();
				return false;
			}
			if ($("#sdt").val().trim().length < 10) {
	            alert("Điện thoại phải có ít nhất 10 ký tự");
	            $("#sdt").focus()
	            return false
	        }
		});
	$('#showPassword1').on('click', function(){
			var passwordField = $('#matkhau');
			var passwordFieldType = passwordField.attr('type');

			if(passwordFieldType == 'password')
			{
				passwordField.attr('type', 'text');
				showPassword1.classList.add("hide-btn");

			} else {
				passwordField.attr('type', 'password');
				showPassword1.classList.remove("hide-btn");

			}
		});
		$('#showPassword2').on('click', function(){
			var passwordField = $('#laimatkhau');		
			var passwordFieldType = passwordField.attr('type');

			if(passwordFieldType == 'password')
			{
				passwordField.attr('type', 'text');
				showPassword2.classList.add("hide-btn");
			} else {
				passwordField.attr('type', 'password');
				showPassword2.classList.remove("hide-btn");
			}
		});
	})
	
</script>

</body>
</html>
