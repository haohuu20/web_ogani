<?php 
include "header.php";
if(!isset($_SESSION['phienDangNhap'])) {
        echo "
            <script type='text/javascript'>
                // window.alert('Bạn chưa đăng nhập, hãy đăng nhập!');
                window.location.href='dangnhap.php';
            </script>
        ";
}
else{
    $manguoidung = $_SESSION['phienDangNhap'];
}
include "connect.php";


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
                        <h2>Yêu thích</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang chủ</a>
                            <span>Yêu thích</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <?php    
                        $sql = "SELECT sanpham.masp, sanpham.tensp, sanpham.anh, sanpham.dongia, soluong FROM (sanpham join yeuthich on sanpham.masp = yeuthich.masp) join nguoidung on nguoidung.manguoidung = yeuthich.manguoidung WHERE nguoidung.manguoidung = '".$manguoidung."'";   
                        
                        $result = $ketnoi->query($sql);                  
                        if ($result->num_rows <= 0) {
                           
                            // if ($result->num_rows <= 0) {
                            //     echo "
                            //         <script type='text/javascript'>
                            //             window.alert('Giỏ hàng của bạn trống, mua sắp tiếp thôi nào!');
                            //             window.location.href='shop-grid.php';
                            //         </script>
                            //     ";
                            // }
                        }
                         ?>
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th class="shoping__product"></th>
                                    <th>Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Bỏ thích</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>                                       
                                <?php 
                                $i=0;
                                $mahd = "";
                                while($row=$result->fetch_assoc())
                                {
                                    
                                    $i++;
                                 ?> 
                                        
                                <tr>
                                   
                                    <td> <?php echo $i; ?></td>
                                    <td class="shoping__cart__item" >
                                        <a href="shop-details.php?masp=<?php echo $row['masp']; ?>">
                                        <img style = "width: 100%; height: 100%; object-fit: cover;" src="img/product/<?php echo $row['anh'];?>" alt="" >
                                         </a>                                     
                                    </td>
                                    <td> 
                                        <a href="shop-details.php?masp=<?php echo $row['masp']; ?>">
                                            <h5><?php echo $row['tensp'];?></h5>
                                        </a>                                      
                                    </td> 
                                    <td class="shoping__cart__price" >
                                        <?php echo $row['dongia'];?>
                                    </td>                                     
                                    <td>
                                        <a href="yeuthichxlxoa.php?masp=<?php echo $row['masp'];?>" class="danger-btn">Bỏ thích</a>
                                    </td>     
                                    <td>
                                        <?php if ($row['soluong'] == 0) {
                                        ?>
                                            <button class="primary-btn" style="border: none;">Hết hàng</button>
                                        <?php         
                                        }
                                        else{
                                        ?>
                                            <a href="xlthemgiohang.php?masp=<?php echo $row['masp'];?>" class="primary-btn">Thêm vào giỏ</a>
                                        <?php
                                        } 
                                        ?>  
                                    </td>                                  
                                </tr>
                                <?php 
                               
                                };                               
                                 ?>                               
                            </tbody>
                        </table>                                             
                    </div>
                </div>
            </div>   
                <div class="row">
                    <div class="" style = "width: 30%; float: left;">
                        <div class="shoping__cart__btns">
                            <a href="shop-grid.php" class="primary-btn cart-btn">TIẾP TỤC MUA SẮM</a>                     
                        </div>
                    </div>               
                </div>            
             <div class="row">              
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

   <?php 
include "footer.php";
 ?>