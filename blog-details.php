<?php 
session_start();
include "connect.php";
if (isset($_GET['id'])) {
        $id_tin_tuc = $_GET['id'];
        $sql_cn=" select *
                    from blog
                    where mablog='".$id_tin_tuc."'
                    ";
        $blog_cap_nhat= mysqli_fetch_array(mysqli_query($ketnoi,$sql_cn));
        $_SESSION['luotxem']= $blog_cap_nhat['luotxem'];
        if(isset($_SESSION['luotxem'])){
            $_SESSION['luotxem']+=1;
        } 
        $sql = "UPDATE blog SET luotxem = '".$_SESSION['luotxem']."' where mablog = ".$id_tin_tuc ;
        $ketnoi -> query($sql);
    }
if (isset($_SESSION['phienDangNhap'])) {
    $manguoidung = $_SESSION['phienDangNhap'];
    $sql_sl_gio_hang = "SELECT count(masp) as a FROM chitiethoadon join hoadon on hoadon.mahoadon = chitiethoadon.mahoadon WHERE hoadon.trangthaihoadon = 0 and hoadon.manguoidung = '".$manguoidung."'";
    $thucthi = $ketnoi->query($sql_sl_gio_hang);
    $sl = $thucthi->fetch_assoc();

    $sql_sl_yeu_thich = "SELECT count(masp) as b FROM yeuthich where manguoidung = ".$manguoidung;
    $thucthi1 = $ketnoi->query($sql_sl_yeu_thich);
    $sl2 = $thucthi1->fetch_assoc(); 

    $sqladmin = "SELECT manguoidung from nguoidung where manguoidung = '".$manguoidung."' and quyen = 1"; // Quyền 1 là admin 
    $kiemtra = $ketnoi->query($sqladmin);

}
 ?>
 <!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        #slideshow {
        overflow: hidden;
        height: 510px;
        width: 750px;
        margin: 0 auto;
        }
        .slide-wrapper {
        width: 1456px;
        -webkit-animation: slide 14s ease infinite;
        }
        .slide {
        float: left;
        height: 510px;
        width: 728px;
        }
        @-webkit-keyframes slide {
            20% {margin-left: 0px;}
            30% {margin-left: -728px;}
            50% {margin-left: -728px;}
            /* 60% {margin-left: -1456px;} */
            /* 80% {margin-left: -1456px;} */
        }


    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Đăng nhập</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li ><a href="./index.php">Trang chủ</a></li>
                <li><a href="./shop-grid.php">Cửa hàng</a></li>
                <li class="active"><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <!-- <li><a href="./shop-details.php">Chi tiết cửa hàng</a></li> -->
                        <li><a href="./shoping-cart.php">Giỏ hàng</a></li>
                       <!--  <li><a href="./checkout.php">Thanh toán</a></li> -->
                        <li><a href="./blog-details.php">Tin tức Organi</a></li>
                    </ul>
                </li>
                <li><a href="./blog.php">Bài viết</a></li>
                <li><a href="./contact.php">Liên hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="https://www.facebook.com/htttql" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Miễn phí vận chuyển cho tất cả các đơn đặt hàng từ 99000đ</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Miễn phí vận chuyển cho tất cả các đơn đặt hàng từ 99000đ</li>
                            </ul>
                            <div class="">
                        
                    </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                            <?php 
                            if (isset($_SESSION['phienDangNhap'])) {                                
                                $sqladmin = "SELECT manguoidung from nguoidung where manguoidung = '".$manguoidung."' and quyen = 1"; // Quyền 1 là admin 
                                $kiemtra = $ketnoi->query($sqladmin);
                                if ($kiemtra->num_rows > 0) {
                            ?>
                                <a href="admin/index.php" target="_blank"><i class='fas fa-cogs' style='font-size:18px'></i></a>
                               <!--  <a href="account/dstaikhoan.php" target="_blank"><i class='fas fa-users-cog' style='font-size:18px'></i></a> -->
                            <?php
                                }
                            }
                            ?>             
                                <a href="https://www.facebook.com/htttql" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <?php 
                                if(!isset($_SESSION['phienDangNhap'])) {
                            ?>
                                    <div class="header__top__right__auth">
                                        <a href="dangky.php"><i class=" fas fa-user-plus"></i> Đăng ký |</a>
                                    </div>
                                     <div class="header__top__right__auth">
                                        <a href="dangnhap.php"><i class="glyphicon glyphicon-log-in"></i> Đăng nhập</a>
                                    </div>
                            <?php
                                }
                                else{
                            ?>
                                    <div class="header__top__right__auth">
                                <a href="capnhat.php"><i class="fas fa-user-edit"></i><?php echo $_SESSION['tentaikhoan']  ." |"?></a>
                                    </div>
                                    <div class="header__top__right__auth">
                                        <a href="dangxuat.php"><i class="glyphicon glyphicon-log-out"></i> Đăng xuất</a>
                                    </div>
                            <?php
                                }
                             ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7" style="padding-right: 1px;padding-left: 1px;">
                    <nav class="header__menu">
                        <ul>
                            <li > <a href="./index.php">Trang chủ</a></li>
                            <li ><a href="./shop-grid.php">Cửa hàng</a></li>
                            <li class="active"><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <!-- <li><a href="./shop-details.php">Chi tiết cửa hàng</a></li> -->
                                    <li><a href="./shoping-cart.php">Giỏ hàng</a></li>
                                   <!--  <li><a href="./checkout.php">Thanh toán</a></li> -->
                                    <li><a href="./blog-details.php">Tin tức Organi</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Bài viết</a></li>
                            <li><a href="./contact.php">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <div class="header__cart">
                        <ul>
                            <li><a href="yeuthich.php"><i class="fa fa-heart"> <span><?php 
                            if (isset($_SESSION['phienDangNhap'])) { echo $sl2['b']; }?></span></i> </a></li>
                            <li><a href="shoping-cart.php"><i class="fa fa-shopping-bag"><span><?php 
                            if (isset($_SESSION['phienDangNhap'])) { echo $sl['a']; }?></span></i></a></li>
                        </ul>
                        <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>

    </header>
    <!-- Header Section End -->

 <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fas fa-bars"></i>
                            <span>Loại sản phẩm</span>
                        </div>
                        <!-- Danh sách các loại sản phẩm -->
                        <ul>
                            <?php
                                $sql = " SELECT * from loaisanpham
                                        ";
                                $ketqua = $ketnoi->query($sql);
                                while($Danh_muc = $ketqua -> fetch_assoc()){
                                ;?>
                                    <li><a href="shop-grid.php?maloai=<?php echo $Danh_muc['maloaisp'];?>"><?php echo $Danh_muc['tenloaisp'];?></a></li>
                                <?php
                                }
                            ;?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="shop-grid.php" method="get">
                                
                                <input type="text" name="tim_kiem" placeholder="Bạn muốn tìm gì?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <?php
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
    }
    else
    {
        $id='';
    }
    $sql_chitiet_blog="SELECT * FROM blog JOIN nguoidung on blog.manguoidung=nguoidung.manguoidung WHERE mablog='$id'";
    $result=$ketnoi->query($sql_chitiet_blog);
    ?>
    <!-- Blog Details Hero Begin -->
    <?php
       
    if($result->num_rows>0)
    {
    while($row_chitiet_blog=$result->fetch_assoc())     
    {    
    ?>
    <section class="blog-details-hero set-bg" data-setbg="img/blog/details/details-hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2><?php echo $row_chitiet_blog['tieude'];?></h2>
                        <ul>
                             <li><?php echo 'Người đăng: '.$row_chitiet_blog['tennguoidung'];?></li>
                            <li><?php echo $row_chitiet_blog['ngaydang'];?></li>
                            <li><?php echo $row_chitiet_blog['luotxem'].': Lượt xem';?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    }
    }
    ?>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
           <div class="col-lg-12">
                        <?php
                            $sql_chitiet_blog1="SELECT * FROM blog JOIN nguoidung on blog.manguoidung=nguoidung.manguoidung WHERE mablog='$id'";
                            $result=$ketnoi->query($sql_chitiet_blog1);
                         if($result->num_rows>0)
                            {
                            while($row_chitiet_blog=$result->fetch_assoc())     
                                {
                         ?>
                    <div class="blog__details__text">
                        <div class="col-lg-6">
                        <img src="img/blog/<?php echo $row_chitiet_blog['anhminhhoa'];?>" alt="">
                         </div>
                        <div class="col-lg-6">
                        <p><?php echo $row_chitiet_blog['noidung'];?></p>
                    </div>
                    </div>
                     <?php
                       }
                       }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>Bài đăng bạn có thể thích</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if(isset($_GET['mablog']))
                    $mablog=$_GET['mablog'];
                    $sql2="SELECT * FROM `blog` WHERE mablog!='$id'";
                    $result=$ketnoi->query($sql2);
                    while($row_blogmoi=$result->fetch_assoc())
                {;
                ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/<?php echo $row_blogmoi['anhminhhoa'];?>" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> <?php echo $row_blogmoi['ngaydang'];?></li>
                                <li><i class="fas fa-eye"></i> <?php echo $row_blogmoi['luotxem'];?></li>
                            </ul>
                            <h5><a href="blog-details.php?id=<?php echo $row_blogmoi['mablog'];?>"><?php echo $row_blogmoi['tieude'];?></a></h5>
                            <p><?php echo $row_blogmoi['mota'];?> </p>
                        </div>
                    </div>
                </div>
                 <?php
                    }
                ;?>
            </div>
        </div>
    </section>
    <!-- Related Blog Section End -->

    <?php 
include "footer.php";
 ?>

