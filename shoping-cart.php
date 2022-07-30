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
                        <h2>Giỏ hàng</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang chủ</a>
                            <span>Giỏ hàng</span>
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
                        $sql = "SELECT sanpham.masp, sanpham.tensp, sanpham.anh, sanpham.dongia, soluong, soluongmua, hoadon.mahoadon, nguoidung.manguoidung, hoadon.trangthaihoadon FROM ((chitiethoadon join sanpham on chitiethoadon.masp = sanpham.masp) join hoadon on hoadon.mahoadon = chitiethoadon.mahoadon) join nguoidung on nguoidung.manguoidung = hoadon.manguoidung WHERE nguoidung.manguoidung = '".$manguoidung."' and trangthaihoadon = 0";   
                        
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
                                    <th>SL</th>
                                    <th>Thành tiền</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>                                       
                                <?php 
                                $i=0;
                                $tongtien = 0;
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
                                <form action="xlcapnhatgiohang.php" method="get">   
                                    <input type="hidden" name="masp" value="<?php echo $row['masp'];?>">
                                    <input type="hidden" name="mahoadon" value="<?php echo $row['mahoadon'];?>">
                                    <input type="hidden" name="dongia" value="<?php echo $row['dongia'];?>" style="border: none;"> 
                                    <td class="shoping__cart__price" >
                                        <?php echo $row['dongia'];?>
                                    </td>
                                    <td>
                                        <input type="number" id = "so_luong" class="soluong" name="soluong" min="1" max="<?php echo $row['soluong'] ?>" value="<?php echo $row['soluongmua'] ?>">
                                        <!-- <select name="soluong" class="soluong" >
                                            <script>
                                                var n = <?php echo $row['soluong'] ?>;
                                                for(i=1;i<=n;i++)
                                                {
                                                    document.write("<option value='"+i+"'>"+i+"</option>");
                                                }
                                            </script>
                                        </select> -->
                                    </td>
                                    <td class="shoping__cart__total">
                                        <input type="textbox" value="<?php echo $row['dongia']*$row['soluongmua'];?>" class="thanhtien" name="thanhtien" readonly="true" style="border: none;">
                                        <script>                                           
                                            $(document).ready(function()
                                            {    
                                                 
                                                $(".soluong").change(function(){
                                                    var tongcu = parseInt($(this).parents("tr").find(".thanhtien").val());
                                                    var sl=parseInt($(this).val());
                                                    //alert(sl);
                                                    var gia=parseInt($(this).parents("tr").find(".shoping__cart__price").text());
                                                    //alert(gia);
                                                    $(this).parents("tr").find(".thanhtien").val(sl*gia);
                                                    var tongmoi = parseInt($(this).parents("tr").find(".thanhtien").val());
                                                                                                 
                                                    var tongtien = parseInt($(".tong1").text());
                                                    var tongtienmoi = tongtien -tongcu + tongmoi;
                                                    $(".tong1").text(tongtienmoi);
                                                });
                                            });
                                        </script>
                                    </td>  
                                    <td class="shoping__cart__item__close">
                                        <button type="submit"  style="border: none; background-color: white; margin-right: 15px;"> <span class="glyphicon glyphicon-ok"></span></button>
                                </form>
                                        <a href="xlxoagiohang.php?masp=<?php echo $row['masp'];?>&mahoadon=<?php echo $row['mahoadon'];?>&soluong=<?php echo $row['soluongmua'];?>"> <span style="" class="glyphicon glyphicon-remove"> </span> </a>
                                    </td>                                       
                                </tr>
                                <?php 
                                $tongtiensp = $row['dongia']*$row['soluongmua'];
                                $tongtien = $tongtien + $tongtiensp;
                                $mahd = $row['mahoadon'];
                                };                               
                                 ?>                               
                            </tbody>
                        </table>                                             
                    </div>
                </div>
            </div>
            <form action="xldathang.php" method="get">
                <div class="form-floating mb-3" style="margin-top: 30px;">
                    <label for="ghiChu"><h4><strong>Ghi chú đơn hàng</strong></h4></label>
                    <textarea class="form-control tinymce" style="font-size: 17px;" rows="4"  name="ghichu" id="txtGhiChu"></textarea>        
                </div>
                <div class="row">
                    <div class="" style = "width: 30%; float: left;">
                        <div class="shoping__cart__btns">
                            <a href="shop-grid.php" class="primary-btn cart-btn">TIẾP TỤC MUA SẮM</a>                     
                        </div>
                    </div>             
                    <div class="" style = "width: 70%; margin-top: -50px;">
                        <div class="shoping__checkout">
                            <h5>Tổng giỏ hàng</h5>
                            <input type="hidden" name="mahoadon" value="<?php echo $mahd?>">
                            <input id="tongtien" type="hidden" value="<?php  echo $tongtien?>" class="tongtien" name="tongtien" readonly="true" style="border: none;">
                            <ul>                         
                                <li >Tổng tiền: <span class="tong1"><?php echo $tongtien ?></span></li>
                            </ul>
                            <button style="width: 100%; height: 40px; font-size: 20px;" class="btn btn-success" type="submit" id="dathang" >Đặt hàng</button>                          
                        </div>
                    </div>
                </div>
            </form>
            <script type="text/javascript">
  
                $(document).ready(function() 
                {
                    $("#dathang").click(function()
                    {          
                        if ($("#tongtien").val() == 0) 
                        {
                            alert("Bạn chưa xác nhận đặt món hàng nào!")                      
                            return false
                        }

                    })

                })
            </script>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">   
                        <h4><strong>Đơn hàng đã đặt</strong></h4>         
                            <?php    
                            $sqltongdon = "SELECT mahoadon, ngaydat, diachi, tongtien from hoadon join nguoidung on hoadon.manguoidung = nguoidung.manguoidung WHERE nguoidung.manguoidung = '".$manguoidung."' and hoadon.trangthaihoadon = 1 ORDER by hoadon.ngaydat DESC";
                            $result1 = $ketnoi->query($sqltongdon);
                            while ($banGhi = $result1->fetch_assoc()) {
                            ?>

                            <nav class="navbar navbar-default" role="navigation" >
                                <div class="dropdown" style="width: 100%">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width: 100%; background-color: #bccb23; border: none;">
                                        <table  style=" font-size: 18px;">
                                            <tr >
                                                <th>Mã hóa đơn: <?php echo $banGhi['mahoadon'] ?></th>
                                                <th>Ngày đặt: <?php echo $banGhi['ngaydat'] ?></th>
                                                <th>Địa chỉ: <?php echo $banGhi['diachi'] ?></th>
                                                <th>Tổng tiền: <?php echo $banGhi['tongtien'] ?></th>                              
                                            </tr>
                                        </table>                    
                                    </button>
                                    <?php
                                    $mahoadon1 = $banGhi['mahoadon'];
                                    $sql = "SELECT sanpham.masp, sanpham.tensp, sanpham.anh, sanpham.dongia, soluong, soluongmua, hoadon.mahoadon, nguoidung.manguoidung, hoadon.trangthaihoadon FROM ((chitiethoadon join sanpham on chitiethoadon.masp = sanpham.masp) join hoadon on hoadon.mahoadon = chitiethoadon.mahoadon) join nguoidung on nguoidung.manguoidung = hoadon.manguoidung WHERE nguoidung.manguoidung = '".$manguoidung."' and hoadon.mahoadon = '".$mahoadon1."'";
                                        $result = $ketnoi->query($sql);   
                                    $result = $ketnoi->query($sql);                                     
                                    ?>
                                   <ul class="dropdown-menu" role="menu" style="width: 100%">
                                        <table>                         
                                            <thead>
                                                <li>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th class="shoping__product"></th>
                                                        <th>Sản phẩm</th>
                                                        <th>Giá</th>
                                                        <th>SL</th>
                                                        <th>Thành tiền</th>
                                                    </tr>
                                                </li>
                                            </thead>
                                            <tbody>                                       
                                                <?php 
                                                $i=0;
                                                while($row=$result->fetch_assoc())
                                                {                                  
                                                    $i++;
                                                ?> 
                                                <li>                                   
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
                                                        <td class="shoping__cart__price">
                                                            <?php echo $row['soluongmua'] ?>                                    
                                                        </td>
                                                        <td class="shoping__cart__total">
                                                            <?php echo $row['dongia']*$row['soluongmua'];?>                      
                                                        </td>                                                 
                                                    </tr>
                                                </li>    
                                                <?php                        
                                                };
                                                 ?>                               
                                            </tbody>
                                        </table>
                                   </ul>                          
                                </div>
                            </nav>
                            <?php 
                            } 
                            ?>                                          
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">   
                        <h4><strong>Đơn hàng đã giao</strong></h4>         
                            <?php    
                            $sqltongdon = "SELECT mahoadon, ngaydat, diachi, tongtien from hoadon join nguoidung on hoadon.manguoidung = nguoidung.manguoidung WHERE nguoidung.manguoidung = '".$manguoidung."' and hoadon.trangthaihoadon = 2 ORDER by hoadon.ngaydat DESC";
                            $result1 = $ketnoi->query($sqltongdon);
                            while ($banGhi = $result1->fetch_assoc()) {
                            ?>

                            <nav class="navbar navbar-default" role="navigation" >
                                <div class="dropdown" style="width: 100%">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width: 100%; background-color: #28a745; border: none;">
                                        <table  style=" font-size: 18px;">
                                            <tr >
                                                <th>Mã hóa đơn: <?php echo $banGhi['mahoadon'] ?></th>
                                                <th>Ngày đặt: <?php echo $banGhi['ngaydat'] ?></th>
                                                <th>Địa chỉ: <?php echo $banGhi['diachi'] ?></th>
                                                <th>Tổng tiền: <?php echo $banGhi['tongtien'] ?></th>                              
                                            </tr>
                                        </table>                    
                                    </button>
                                    <?php
                                    $mahoadon1 = $banGhi['mahoadon'];
                                    $sql = "SELECT sanpham.masp, sanpham.tensp, sanpham.anh, sanpham.dongia, soluong, soluongmua, hoadon.mahoadon, nguoidung.manguoidung, hoadon.trangthaihoadon FROM ((chitiethoadon join sanpham on chitiethoadon.masp = sanpham.masp) join hoadon on hoadon.mahoadon = chitiethoadon.mahoadon) join nguoidung on nguoidung.manguoidung = hoadon.manguoidung WHERE nguoidung.manguoidung = '".$manguoidung."' and hoadon.mahoadon = '".$mahoadon1."'";
                                        $result = $ketnoi->query($sql);   
                                    $result = $ketnoi->query($sql);                                     
                                    ?>
                                   <ul class="dropdown-menu" role="menu" style="width: 100%">
                                        <table>                         
                                            <thead>
                                                <li>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th class="shoping__product"></th>
                                                        <th>Sản phẩm</th>
                                                        <th>Giá</th>
                                                        <th>SL</th>
                                                        <th>Thành tiền</th>
                                                    </tr>
                                                </li>
                                            </thead>
                                            <tbody>                                       
                                                <?php 
                                                $i=0;
                                                while($row=$result->fetch_assoc())
                                                {                                  
                                                    $i++;
                                                ?> 
                                                <li>                                   
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
                                                        <td class="shoping__cart__price">
                                                            <?php echo $row['soluongmua'] ?>                                    
                                                        </td>
                                                        <td class="shoping__cart__total">
                                                            <?php echo $row['dongia']*$row['soluongmua'];?>                      
                                                        </td>                                                 
                                                    </tr>
                                                </li>    
                                                <?php                        
                                                };
                                                 ?>                               
                                            </tbody>
                                        </table>
                                   </ul>                          
                                </div>
                            </nav>
                            <?php 
                            } 
                            ?>                                          
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

   <?php 
include "footer.php";
 ?>