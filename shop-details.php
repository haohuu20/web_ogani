    <?php
    session_start();
        include ('connect.php');
    ;?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Chi tiết</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<?php
        if (isset($_GET['masp'])) {      
            $masp = $_GET['masp'];
            $sql = "SELECT * FROM sanpham join loaisanpham
                    on sanpham.maloaisp = loaisanpham.maloaisp
                    where masp = '$masp'
                    ";
        }else{
            $sql = "SELECT * FROM sanpham join loaisanpham
                    on sanpham.maloaisp = loaisanpham.maloaisp";
        }
        $ketqua = $ketnoi -> query($sql);
        $Sanpham = $ketqua -> fetch_assoc();   
    ;?>

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
                <li><a href="yeuthich.php"><i class="fa fa-heart"></i> <span>1</span></a></li>
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
                <li class="active"><a href="./index.php">Trang chủ</a></li>
                <li><a href="./shop-grid.php">Cửa hàng</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.php">Chi tiết cửa hàng</a></li>
                        <li><a href="./shoping-cart.php">Giỏ hàng</a></li>
                        <li><a href="./checkout.php">Thanh toán</a></li>
                        <li><a href="./blog-details.php">Tin tức Organi</a></li>
                    </ul>
                </li>
                <li><a href="./blog.php">Bài viết</a></li>
                <li><a href="./contact.php">Liên hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
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
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
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
                                <a href="dangnhap.php"><i class="fas fa-user-edit"></i><?php echo $_SESSION['tentaikhoan']  ." |"?></a>
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
                            <li><a href="./index.php">Trang chủ</a></li>
                            <li ><a href="./shop-grid.php">Cửa hàng</a></li>
                            <li class="active"> <a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    
                                    <li><a href="./shoping-cart.php">Giỏ hàng</a></li>
                                    
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
                            <li><a href="yeuthich.php"><i class="fa fa-heart"></i> </a></li>
                            <li><a href="shoping-cart.php"><i class="fa fa-shopping-bag"></i></a></li>
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


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo $Sanpham['tensp'];?></h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang chủ</a>
                            <a href="./index.php"><?php echo $Sanpham['tenloaisp'];?></a>
                            <span><?php echo $Sanpham['tensp'];?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    
    <!-- Product Details Section Begin -->
    
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="img/product/<?php echo $Sanpham['anh'];?>" alt="">
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $Sanpham['tensp'];?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price"><?php echo $Sanpham['dongia'];?></div>
                        <p><?php echo $Sanpham['mota'];?></p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <?php if ($Sanpham['soluong'] > 0) {
                        ?>
                            <a href="xlthemgiohang.php?masp=<?php echo $Sanpham['masp'];?>" class="primary-btn">Thêm vào giỏ</a>
                        <?php         
                        } 
                        else{
                        ?>
                            <button class="primary-btn" style="border: none"> Hết hàng</button>
                        <?php
                        }
                        ?>  
                       
                        <a href="yeuthichxlthem.php?masp=<?php echo $Sanpham['masp'];?>" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Availability</b> <span>In Stock</span></li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
            <div class="product-details-tab-area">
                <hr>
            <div class="container">
                <div class="row">
                    <div class="col-12"> 
                        <div class="section-content" >
                            <b>Bình luận</b>                                               
                        </div>    
                                <!-- Start Tab - Product Review -->
                                <div class="tab-pane " id="product-review">
                                    
                                    <!-- Start - Review Comment -->
                                    <ul class="comment" style="list-style-type: none;">
                                       <?php 
                                            $sql1 = "SELECT * FROM binhluan JOIN nguoidung ON binhluan.manguoidung = nguoidung.manguoidung 
                                                WHERE masp =  '".$masp."'
                                                LIMIT 8; 
                                            ";
                                      
                                            $binh_luan =  mysqli_query($ketnoi,$sql1);
                                            $i = 0;
                                            while($row = mysqli_fetch_array($binh_luan)){
                                            $i ++;
                                       ?>
                                        <!-- Start - Review Comment list-->
                                        <li class="comment__list">                                                                                         
                                            <div class="comment__wrapper">
                                               
                                                <div class="comment__content">
                                                    <div class="comment__content-top">
                                                            <div class="comment__content-left">
                                                                <h6 class="comment__name">Khách hàng: <?php echo $row['tennguoidung']?></h6>
                                                                <div class="product__details__text">
                                                                <div class="product__details__rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                   
                                                                </div>
                                                            </div>
                                                                
                                                            </div>   
                                                        </div>
                                                        
                                                        <div class="para__content">                        
                                                            <p class="para__text"><?php echo $row['noidungbinhluan']?></p>
                                                            <p class="thoigian"><?php echo $row['thoigianbinhluan']?></p>  
                                                        </div>  
                                                    </div>
                                            </div>                                                                 
                                        </li> <!-- End - Review Comment list-->
                                        <?php 
                                            }
                                        ?>                                    
                                    </ul> <!-- End - Review Comment -->
                                    <hr>
                                        <!-- Start Add Review Form-->
                                    <?php 
                                    if (isset($_SESSION['phienDangNhap'])) {
                                    ?>
                                    <div class="review-form m-t-40">
                                        <div class="section-content">
                                            <b>Bình luận của bạn</b>                                               
                                        </div>
                                        <div class="contact-form spad">
                                                <form action="binhluan_thuchien.php" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-12 text-center">
                                                            <input type="hidden" name="masp" value ="<?php echo $_GET['masp'] ?>">
                                                            <textarea placeholder="Nhập bình luận.." name="message" id="message" ></textarea>
                                                            <button type="submit" id="gui" class="site-btn">Bình luận</button>
                                                        </div>
                                                    </div>
                                                </form>
                                        </div>
                                    </div> <!-- End Add Review Form- -->

                                    <hr>
                                    <?php
                                    }
                                    ?>
                                </div> <!-- Start Tab - Product Review -->
                        </div>
                    </div>
                </div>  
            </div>
        </div> <!-- End Product Details Tab -->

        </div> <!-- End Product Details Tab -->
                 <!--    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus
                                        suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam
                                        vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat,
                                        accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a
                                        pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula
                                        elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus
                                        et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam
                                        vel, ullamcorper sit amet ligula. Proin eget tortor risus.</p>
                                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                        elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                        porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                        nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed
                                        porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum
                                        sed sit amet dui. Proin eget tortor risus.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                        elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                        porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                        nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->

    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if (isset($_GET['masp'])) {      
                    $masp = $_GET['masp'];
                    $sql1=" SELECT * FROM `sanpham` 
                        WHERE 
                        maloaisp = (SELECT maloaisp from `sanpham` WHERE masp = '$masp')
                        and masp != '$masp' LIMIT 4
                    ";
                }else{
                    $sql1=" SELECT * FROM `sanpham` LIMIT 4              
                    ";
                }
              
                $ketqua = $ketnoi -> query($sql1);
                    while($DS_sp = $ketqua -> fetch_assoc()){
                        ;?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/<?php echo $DS_sp['anh'];?>">
                                    <?php if ($DS_sp['soluong'] == 0) {
                                        ?>
                                        <span class="product__label product__label--sale-out">Hết hàng</span>
                                        <?php         
                                        } 
                                        ?>   
                                                                      
                                        <ul class="product__item__pic__hover">
                                            <li><a href="yeuthichxlthem.php?masp=<?php echo $DS_sp['masp'];?>"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="shop-details.php?masp=<?php echo $DS_sp['masp'];?>"><i class="fas fa-eye"></i></a></li>
                                        <?php if ($DS_sp['soluong'] > 0) {
                                        ?>
                                            <li><a href="xlthemgiohang.php?masp=<?php echo $DS_sp['masp'];?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        <?php         
                                        } 
                                        ?>     
                                        </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="shop-details.php?masp=<?php echo $DS_sp['masp'];?>"><?php echo $DS_sp['tensp'];?></a></h6>
                                    <h5><?php echo $DS_sp['dongia'];?></h5>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                ;?>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->
    <script type="text/javascript">
        $(document).ready(function() 
        {
            $("#gui").click(function()
            {          
            if ($("#message").val().trim() == "") {
                alert("Bạn chưa nhập gì")
                $("#message").focus()
                return false
                }
            });
            
        
        })
    </script>
<?php 
include "footer.php";
 ?>