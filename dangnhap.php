<?php ob_start();?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Đăng nhập</title>
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
  
    form img{
        border-radius: 5px;
        background: #7fad39;
        padding: 2px;
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
     <table align="center" style="height:600px;">
        <tr>            
            <th> 
                <form role="form" name="frmDangNhap" method="GET">     
                <h3 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Đăng nhập</h3>              
                    <div class="form-group">
                        <label for="usrname"> Tài khoản</label>
                        <input type="text" class="form-control" id="taiKhoan" name="taiKhoan" placeholder="Nhập tài khoản..">
                    </div>
                    <div class="form-group1">
                        <label for="psw"> Mật khẩu</label>
                        <input type="password" class="form-control" id="matKhau" name = "matKhau" placeholder="Nhập mật khẩu..">
                        <span class="show-btn"><i id="showPassword1" class="fas fa-eye"></i></span>
                    </div> 
                    <div style="margin-top: 15px">
                        <img src="captcha.php" title="" alt="" /><br/>
                    </div>
                    <div style="margin-top: 11px">    
                        <label for="captcha">Nhập mã bảo vệ</label>
                        <input type="captcha" class="form-control" id="captcha" name = "captcha" placeholder="Nhập mã bảo vệ..">
                    </div>                    
                    <div style="margin-top: 15px">
                       <div class="loginbox-submit">
                            <input type="submit" id="dangNhap" class="btn btn-success" style="width: 100%;" value="Đăng nhập">
                            <a href="index.php" class="btn btn-danger" style="width: 100%; margin-top: 2px"> Quay lại</a>
                        </div>              
                         <div><span>Bạn chưa có tài khoản?</span>
                            <a href="dangky.php" > Đăng ký</a> 
                        </div>
                    </div>
                </form> 
             </th>
        </tr>
    </table>
    <script type="text/javascript">
        $(document).ready(function() 
        {
            $("#dangNhap").click(function()
            {          
            //Kiểm tra tên tài khoản
            if ($("#taiKhoan").val() == "") 
            {
                alert("Bạn chưa nhập tài khoản")
                $("#taiKhoan").focus()
                return false
            }

            if ($("#matKhau").val() == "") {
                alert("Bạn chưa nhập mật khẩu")
                $("#matKhau").focus()
                return false
                }
            });
            $('#showPassword1').on('click', function(){
            var passwordField = $('#matKhau');
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
        })
    </script>
    <?php 
      include 'connect.php';
        if (isset($_GET['taiKhoan']) && isset($_GET['matKhau']))
         {

            $taiKhoan = $_GET['taiKhoan'];
            $matkhau = $_GET['matKhau'];
            $sql = "SELECT * from nguoidung where tennguoidung = '$taiKhoan' and matkhau = '$matkhau'";
            //echo $sql;
            $kq = $ketnoi->query($sql);
            if ($kq->num_rows > 0) 
            {
                $sql2 = "SELECT * from nguoidung where tennguoidung = '$taiKhoan' and matkhau = '$matkhau' and quyen > 0 and hoatdong = 0";
                //echo $sql;
                $kq2 = $ketnoi->query($sql2);
                if ($kq2->num_rows == 1)
                {
                    session_start();
                    $sqlmanguoidung = "SELECT * from nguoidung where tennguoidung = '".$taiKhoan."'";
                    $kq3 = $ketnoi->query($sqlmanguoidung);
                    $kq = $kq3->fetch_assoc();
                    $_SESSION['phienDangNhap'] = $kq['manguoidung'];  
                    $_SESSION['tentaikhoan'] = $taiKhoan; 
                    $_SESSION['quyen'] = $kq['quyen']; 
                    $captcha = $_GET['captcha'];                               
                    if($captcha == $_SESSION['captcha'])
                    {                   
                        header("location:index.php");
                    }
                    else{
                        // echo "<script> 
                        //          alert('Mã bảo vệ không đúng!'');
                        //     </script>"; 
                        header("location:dangnhap.php");                       
                    }     
                            
                }                        
                else{            
    ?>
                <script> 
                     alert("Tài khoản của bạn đã bị khóa không thể đăng nhập!");
                </script>
      <?php
                      }
            }
            else{
         ?>
                <script type="text/javascript"> 
                    alert("Tài khoản hoặc mật khẩu không chính xác!");
                </script>
        <?php
                   }
             }
             
 
        ?>
    

</body>
</html>
<?php ob_end_flush();?>