<?php 
include "header.php";
 ?>
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
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Danh mục sản phẩm</h4>
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
                        
                        <div class="sidebar__item">
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
                            <div class="latest-product__text">
                                <h4>Sản phẩm mới</h4>

                                <div class="latest-product__slider owl-carousel">
                                    <?php
                                        for($i=1; $i<=18; $i++){
                                            if($i%3==1){
                                                ;?>
                                                <div class="latest-prdouct__slider__item">
                                                    <a href="shop-details.php?masp=<?php echo $arr_ma_sp[$i-1];?>" class="latest-product__item">
                                                        <div class="latest-product__item__pic">
                                                            <img src="img/product/<?php echo $arr_anh_sp[$i-1];?>" alt="">
                                                        </div>
                                                        <div class="latest-product__item__text">
                                                            <h6><?php echo $arr_ten_sp[$i-1];?></h6>
                                                            <span><?php echo $arr_gia_sp[$i-1]." đ";?></span>
                                                        </div>
                                                    </a>
                                                <?php
                                            }
                                            if($i%3==2){
                                                ;?>
                                                <a href="shop-details.php?masp=<?php echo $arr_ma_sp[$i-1];?>" class="latest-product__item">
                                                    <div class="latest-product__item__pic">
                                                        <img src="img/product/<?php echo $arr_anh_sp[$i-1];?>" alt="">
                                                    </div>
                                                    <div class="latest-product__item__text">
                                                        <h6><?php echo $arr_ten_sp[$i-1];?></h6>
                                                        <span><?php echo $arr_gia_sp[$i-1]." đ";?></span>
                                                    </div>
                                                </a>
                                        <?php
                                            }
                                            if($i%3==0){
                                                ;?>
                                                    <a href="shop-details.php?masp=<?php echo $arr_ma_sp[$i-1];?>" class="latest-product__item">
                                                        <div class="latest-product__item__pic">
                                                            <img src="img/product/<?php echo $arr_anh_sp[$i-1];?>" alt="">
                                                        </div>
                                                        <div class="latest-product__item__text">
                                                            <h6><?php echo $arr_ten_sp[$i-1];?></h6>
                                                            <span><?php echo $arr_gia_sp[$i-1]." đ";?></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <?php
                                            }
                                        }
                                    ;?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <!-- <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-1.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-2.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Vegetables</span>
                                            <h5><a href="#">Vegetables’package</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-3.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Mixed Fruitss</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-4.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-5.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-6.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="1">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4"></div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php 
                        if (isset($_GET['tim_kiem'])) {
                            $tim_kiem = $_GET['tim_kiem'];
                            $sqlSelect = "SELECT * from sanpham where tensp like '%".$tim_kiem."%' ";
                            $sqlAll = "SELECT * from sanpham where tensp like '%".$tim_kiem."%' ";
                        }else{
                            $sqlSelect = "SELECT * from sanpham where 1=1 ";
                            $sqlAll = "SELECT * from sanpham where 1=1 ";
                        }
                        if (!isset($_GET['trang'])) {
                                $trang = 1;
                            }
                            else{
                                $trang = $_GET['trang'];
                            }
                            if(isset($_GET['maloai']))
                            {
                                $maloai = $_GET['maloai'];
                                $sqlAll .= " and maloaisp = '$maloai'";
                                $ketquaAll = $ketnoi ->query($sqlAll);
                                $tongSoBanGhi = $ketquaAll->num_rows;
                                $slBanGhiMoiTrang = 9;
                                $soLuongTrang = Ceil($tongSoBanGhi/$slBanGhiMoiTrang);
                                $offset = ($trang - 1)*$slBanGhiMoiTrang;
                                $sqlSelect .= " and maloaisp = '$maloai' LIMIT $slBanGhiMoiTrang OFFSET $offset";
                                $ketqua = $ketnoi ->query($sqlSelect);
                            }
                            else{
                                //$sqlAll = "SELECT * from sanpham ";
                                $ketquaAll = $ketnoi ->query($sqlAll);
                                $tongSoBanGhi = $ketquaAll->num_rows;
                                $slBanGhiMoiTrang = 9;
                                $soLuongTrang = Ceil($tongSoBanGhi/$slBanGhiMoiTrang);
                                $offset = ($trang - 1)*$slBanGhiMoiTrang;
                                $sqlSelect .= " LIMIT $slBanGhiMoiTrang OFFSET $offset";
                                $ketqua = $ketnoi ->query($sqlSelect);
                            }
                            
                            if($ketqua->num_rows >0)
                            {
                        ?>
                        <?php
                        while($DS_sp = $ketqua->fetch_assoc()){
                            ;?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
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
                                        <h5><?php echo $DS_sp['dongia'] ." đ";?></h5>
                                          <?php //echo $DS_sp['anh'];?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                        ;?>
                        
                    </div>
                    <div class="product__pagination">
                    <?php
                        $i = 1;
                        if(isset($_GET['maloai'])){
                            $maloaisp=$_GET['maloai'];
                            while ($i <= $soLuongTrang) {
                                ;?>
                            <a <?php echo "href='shop-grid.php?maloai=$maloaisp&trang=$i'"; ?>><?php echo $i; ?></a>
                    <?php
                            $i++;
                            }
                        }
                        elseif (isset($_GET['maloai']) && isset($_GET['tim_kiem']) ) {
                            $tim_kiem=$_GET['tim_kiem'];
                            while ($i <= $soLuongTrang) {
                                ;?>
                            <a <?php echo "href='shop-grid.php?maloai=$maloaisp&tim_kiem=$tim_kiem&trang=$i'"; ?>><?php echo $i; ?></a>
                    <?php
                            $i++;
                            }
                        }
                        elseif (isset($_GET['tim_kiem']) ) {
                            $tim_kiem=$_GET['tim_kiem'];
                            while ($i <= $soLuongTrang) {
                                ;?>
                            <a <?php echo "href='shop-grid.php?tim_kiem=$tim_kiem&trang=$i'"; ?>><?php echo $i; ?></a>
                    <?php
                            $i++;
                            }
                        }
                        else{
                            while ($i <= $soLuongTrang) 
                            {	 
                    ?>
                                <a <?php echo "href='shop-grid.php?trang=$i'"; ?>><?php echo $i; ?></a>
                    <?php 
                            $i++;
                            }
                        }
                        
                    ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

<?php 
include "footer.php";
 ?>
