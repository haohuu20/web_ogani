 <!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Cập nhật tài khoản</title>
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

   <link rel="stylesheet" href="style.css">
  <style>
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
   <?php

      include("connect.php");
       session_start();
      $taiKhoan = $_SESSION['tentaikhoan'];
      $sql = "SELECT * from nguoidung where tennguoidung = '".$taiKhoan."'";
      
      $kq = $ketnoi->query($sql);
      $banGhi = $kq->fetch_assoc();
       if (isset($_GET['taiKhoan']) && isset($_GET['matKhau'])) 
       {  
            $email = $_GET['emailnguoidung'];
            $matKhau = $_GET['matKhau'];
            $diachi = $_GET['diachi'];
            $sdt = $_GET['Sđt'];
            $sqlcapnhat = "UPDATE nguoidung set  emailnguoidung = '$email',matkhau = '$matKhau', diachi='$diachi', Sđt='$sdt' where tennguoidung = '$taiKhoan'";
            
            if ($ketnoi->query($sqlcapnhat) === true) 
               {

                  header("location:index.php");
               }          
               
      }

   ?>
   <table align="center" width="400px">
      <tr><th>      
      <form  method="get">
         <h3 style="color:red;"><span class="glyphicon glyphicon-edit"></span> Cập nhật tài khoản</h3>
         <div class="form-group">
               <label for="tenTaiKhoan">Tên tài khoản:</label>                         
            <input type="text" class="form-control" id="taiKhoan" name="taiKhoan" value="<?php echo $banGhi['tennguoidung']?>" readonly>
         </div>
          <div class="form-group">
            <div class="form-group1">
               <label for="matKhau">Mật khẩu mới:</label>
               <input type="password" class="form-control" id="password1" name="matKhau" value="<?php echo $banGhi['matkhau']?>" placeholder="Nhập mật khẩu mới..">
               <span class="show-btn"><i id="showPassword1" class="fas fa-eye"></i></span>
            </div>
          </div>
          <div class="form-group">
               <div class="form-group1">
               <label for="laiMatKhau">Nhập lại mật khẩu mới:</label>
               <input type="password" class="form-control" id="password2" name="laiMatKhau" value="<?php echo $banGhi['matkhau']?>" placeholder="Nhập lại mật khẩu mới..">
               <span class="show-btn"><i id="showPassword2" class="fas fa-eye"></i></span>
            </div>
          </div>
          <div class="form-group">
               <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="emailnguoidung" value="<?php echo $banGhi['emailnguoidung']?>" placeholder="Nhập email..">
          </div>
             <div class="form-group">
               <label for="diachi">Địa chỉ:</label>
            <input type="diachi" class="form-control" id="diachi" name="diachi" value="<?php echo $banGhi['diachi']?>" placeholder="Nhập địa chỉ..">
          </div>
             <div class="form-group">
               <label for="sdt">Số điện thoại:</label>
            <input type="sdt" class="form-control" id="sdt" name="Sđt" value="<?php echo $banGhi['Sđt']?>" placeholder="Nhập số điện thoại..">
          </div>
         <div>
             <button id="btnCapNhat" class="btn btn-success"><span class="glyphicon  glyphicon glyphicon-edit" ></span> Cập nhật</button>
             <a href="index.php?" class="btn btn-primary"><span class="glyphicon  glyphicon-arrow-left"></span> Quay lại</a>
         </div>
      </form>
   </div>
  </th></tr></table>
<script type="text/javascript">
   $(document).ready(function ()
    { 
      $("#btnCapNhat").click(function () 
      {
         if ($("#taiKhoan").val().trim() == "") 
         {
            alert('Tên tài khoản không được bỏ trống!');
            $("#taiKhoan").focus();
            return false;
         }
         if ($("#password1").val().trim() == "") 
         {
            alert('Mật khẩu không được bỏ trống!');
            $("#password1").focus();
            return false;
         }
         if ($("#password1").val().trim().length < 6) 
         {
               alert("Mật khẩu phải có ít nhất 6 ký tự");
               $("#password1").focus()
               return false
           }

           if ($("#password2").val().trim() == "") 
         {
            alert('Nhập lại mật khẩu không được bỏ trống!');
            $("#password2").focus();
            return false;
         }
         if ($("#password1").val().trim() !== $("#password2").val().trim()) 
         {
            alert('Nhập lại mật khẩu không đúng!');
            $("#password2").focus();
            return false;
         }
         if ($("#email").val().trim() == "") 
         {
            alert('Email không được bỏ trống!');
            $("#email").focus();
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
      })
      $('#showPassword1').on('click', function()
      {
         var passwordField = $('#password1');
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
      $('#showPassword2').on('click', function()
      {
         var passwordField = $('#password2');      
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