<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>OGANI| Quản lý SẢN PHẨM ORGANIC</title>

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
            $tenloaisp = $_POST['tenloaisp'];

            // Lấy ra được thông tin & xử lý liên quan đến bức ẢNH MINH HỌA được SUBMIT từ form TIN TỨC THÊM MỚI
            $noi_se_luu_buc_anh_tren_website = "./img/".basename($_FILES["anhloai"]["name"]);
            $luu_file_anh_tam = $_FILES["anhloai"]["tmp_name"];

            // UPLOAD bức ảnh tạm này lên MÁY CHỦ WEB
            $ket_qua_up_anh = move_uploaded_file($luu_file_anh_tam, $noi_se_luu_buc_anh_tren_website);

            // Ghi nhận thông tin bức ẢNH MINH HỌA được UPLOAD lên hệ thống hay chưa?
            if(!$ket_qua_up_anh) {
                $anh_minh_hoa = NULL;
            } else {
                $anh_minh_hoa = basename($_FILES["anhloai"]["name"]);
            }



            $sql = "
                INSERT INTO `loaisanpham` (`tenloaisp`,`anhloai`) 
                VALUES ('".$tenloaisp."', '".$anh_minh_hoa."')";

            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $loaisp = mysqli_query($ketnoi, $sql);

            // 4. Thông báo chèn dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã thêm mới loại sản phẩm thành công');
                    window.location.href='loaisp.php';
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