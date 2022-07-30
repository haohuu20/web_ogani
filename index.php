
<?php 
session_start();
include "connect.php";
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
                <li class="active"><a href="./index.php">Trang chủ</a></li>
                <li><a href="./shop-grid.php">Cửa hàng</a></li>
                <li><a href="#">Pages</a>
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
                            <li class="active"> <a href="./index.php">Trang chủ</a></li>
                            <li ><a href="./shop-grid.php">Cửa hàng</a></li>
                            <li><a href="#">Pages</a>
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
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="shop-grid.php" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php
                        $sql=" SELECT * from loaisanpham
                        ";
                        $ketqua = $ketnoi -> query($sql);   
                        while($DS_loai_sp = $ketqua->fetch_assoc()){
                    ;?>

                        <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/<?php echo $DS_loai_sp['anhloai'];?>">
                            <h5><a href="shop-grid.php?maloai=<?php echo $DS_loai_sp['maloaisp'];?>"><?php echo $DS_loai_sp['tenloaisp'];?></a></h5>
                        </div>
                    </div>  

                    <?php
                        }
                    ;?>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="">
        <div class="container">
        <?php
                $sql = "SELECT * FROM `sanpham` 
                    ORDER by masp DESC LIMIT 18
                    ";
                $ketqua = $ketnoi -> query($sql);
                $quality = $ketqua->num_rows;
                $arr_ten_sp = array();
                $arr_gia_sp = array();
                $arr_anh_sp = array();
                $arr_ma_sp = array();
                while($DS = $ketqua -> fetch_assoc()){
                    $arr_ma_sp[] = $DS['masp'];
                    $arr_ten_sp[] = $DS['tensp'];
                    $arr_anh_sp[] = $DS['anh'];
                    $arr_gia_sp[] = $DS['dongia'];
                    
                }
                ;?>
            <h3 style="margin-bottom: 64px;">Sản phẩm mới nhất</h3>
                <div id="slideshow">
                    <div class="slide-wrapper">
                        
                        <div class="slide">
                            <div class="list__product">
                                <?php
                                    for($i = 0 ; $i<=8; $i++){
                                       ;?>
                                            <div class="item-product">
                                        <div class="product__image">
                                            <a href="shop-details.php?masp=<?php echo $arr_ma_sp[$i];?>"><img class="product__img"  src="img/product/<?php echo $arr_anh_sp[$i];?>" alt=""></a>
                                            
                                        </div>
                                        <div class="product__info">
                                            <div class="product__info--name">
                                                <a href="shop-details.php?masp=<?php echo $arr_ma_sp[$i];?>"><?php echo $arr_ten_sp[$i];?></a>
                                            </div>
                                            <div class="product__info--price">
                                                <p><?php echo $arr_gia_sp[$i];?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                ;?>
                                    
                                </div>
                            </div>
                        <div class="slide">
                            <div class="list__product">
                            <?php
                                    for($i = 9 ; $i<=17; $i++){
                                       ;?>
                                            <div class="item-product">
                                        <div class="product__image">
                                            <img class="product__img"  src="img/product/<?php echo $arr_anh_sp[$i];?>" alt="">
                                        </div>
                                        <div class="product__info">
                                            <div class="product__info--name">
                                                <a href="shop-details.php?masp=<?php echo $arr_ma_sp[$i];?>"><?php echo $arr_ten_sp[$i];?></a>
                                            </div>
                                            <div class="product__info--price">
                                                <p><?php echo $arr_gia_sp[$i];?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                ;?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $sql=" SELECT * from blog
                            ";
                    $ketqua = $ketnoi -> query($sql);
                    while($Blogs = $ketqua -> fetch_assoc()){
                        ;?>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/<?php echo $Blogs['anhminhhoa'];?>" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> <?php echo $Blogs['ngaydang'];?></li>
                                    <li><i class="fas fa-eye"></i> <?php echo $Blogs['luotxem'];?></li>
                                </ul>
                                <h5><a href="blog-details.php?id=<?php echo $Blogs['mablog'];?>"> <?php echo $Blogs['tieude'];?></a></h5>
                                <p> <?php echo $Blogs['mota'];?></p>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ;?>
                

            </div>
        </div>
    </section>
    <!-- Blog Section End -->
<?php 
include "footer.php";
 ?>