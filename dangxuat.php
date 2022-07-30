<?php
session_start();
if(isset($_SESSION['phienDangNhap']) && isset($_SESSION['phienDangNhap'])!=NULL)
    unset($_SESSION['phienDangNhap']);
    unset($_SESSION['tentaikhoan']);
    unset($_SESSION['quyen']);
    echo "
            <script type='text/javascript'>
                window.alert('Bạn đã đăng xuất thành công');
                window.location.href='index.php';
            </script>
        ";
    ?>