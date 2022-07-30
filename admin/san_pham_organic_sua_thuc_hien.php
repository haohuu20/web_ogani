<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>OGANI| Quản lý SẢN PHẨM ORGANI</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>
<body>
  <section id="container">
    <?php 
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            require_once "../connect.php"; 

            // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            $id_san_pham = $_POST['txtID'];
            $ten_sp = $_POST['txtTenSP'];
            $gia_tien = $_POST['txtGiaTien'];
            $so_luong = $_POST['txtSoLuong'];
            $mo_ta = $_POST['txtMoTa'];
            $id_loaisp = $_POST['idloaisp'];
            
            //Lấy ra thông tin buawcs ảnh từ tin_tuc_them_moi
                $noi_se_luu_buc_anh_tren_website = "./img/".basename($_FILES["txtAnhMinhHoa"]["name"]);
                $luu_file_anh_tam = $_FILES["txtAnhMinhHoa"]["tmp_name"];

            //UPLOAD len web
                $ket_qua_up_anh = move_uploaded_file($luu_file_anh_tam, $noi_se_luu_buc_anh_tren_website);

            //Ghi nhan buc anh UP tren he thong hay chua
                if(!$ket_qua_up_anh) {
                    $anh_minh_hoa = NULL;
                } else{
                    $anh_minh_hoa = basename($_FILES["txtAnhMinhHoa"]["name"]);
                }

                if ($anh_minh_hoa==NULL) {
                    $sql = "
                        UPDATE `sanpham` 
                        SET `tensp` = '".$ten_sp."', `dongia` = '".$gia_tien."', `soluong` = '".$so_luong."', `mota` = '".$mo_ta."', `maloaisp` = '".$id_loaisp."'
                        WHERE `masp` = '".$id_san_pham."'
                    ";
                } else {
                    $sql = "
                        UPDATE `sanpham` 
                        SET `tensp` = '".$ten_sp."', `dongia` = '".$gia_tien."', `soluong` = '".$so_luong."', `mota` = '".$mo_ta."', `anh` = '".$anh_minh_hoa."' , `maloaisp` = '".$id_loaisp."' 
                        WHERE `masp` = '".$id_san_pham."'
                    ";
                }
                

            

            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
                //echo $sql;
            $capnhat = $ketnoi -> query($sql);

            // 4. Thông báo cập nhật dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã cập nhật sản phẩm thành công');
                    window.location.href='san_pham_organic.php';
                </script>
            ";

        ;?>
    </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>
</body>
</html>