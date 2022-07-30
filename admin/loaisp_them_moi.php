<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>OGANI| Thêm loại sản phẩm</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
          tinymce.init({
            selector: '#txtMoTa'
          });

          tinymce.init({
            selector: '#txtGhiChu'
          });
        </script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      
      <a href="index.php" class="logo"><b><span>OGANI</span></b></a>
      <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
          <div class="input-group" style="float: right; margin-top: 20px;"> 
            <div class="form-control" style="border-radius: 4px;"><?php  echo $_SESSION['tentaikhoan'];?>  </div>                 
          </div> 
      </form>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
       
        </div>
      
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
         
          <li class="mt">
            <a  href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Trang chủ</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-shopping-cart"></i>
              <span>Đơn hàng</span>
              </a>
            <ul class="sub">
              <li><a href="hoa_don_chua_xl.php"> Đơn hàng chưa xử lý</a></li>
              <li><a href="hoa_don_da_xl.php"> Đơn hàng đã xử lý</a></li>
            </ul>
          </li>         
          <li class="sub-menu">
            <a href="san_pham_organic.php">
              <i class="fa fa-tree"></i>
              <span >Sản phẩm</span>
              </a>
          </li>
          <li class="sub-menu">
            <a class="active" href="loaisp.php">
              <i class="fas fa-list-alt"></i>
              <span >Loại sản phẩm</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="nguoi_dung.php">
              <i class="fa fa-hand-peace-o"></i>
              <span>Người dùng</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="tin_tuc.php">
              <i class="fa fa-newspaper-o"></i>
              <span>Tin tức</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="binh_luan.php">
              <i class="fa fa-comment"></i>
              <span>Bình luận</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="lien_he.php">
              <i class="material-icons">email</i>
              <span>Liên hệ</span>
              </a>
          </li>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Thêm mới loại sản phẩm</h3>
        <!-- BASIC FORM VALIDATION -->
        <!-- /row -->
        <!-- FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="loaisp_them_moi_thuc_hien.php" enctype="multipart/form-data">
                                            
                                        
                                            
                                            <div class="form-floating mb-3">
                                                <label for="inputEmail"><h4><strong>Tên loại sản phẩm</strong></h4></label>
                                                <input class="form-control" id="inputtensp" type="text"  name="tenloaisp" />
                                                
                                            </div>

                                            <div class="form-floating mb-3">
                                                <label for="txtAnhMinhHoa"><h4><strong>Ảnh minh họa</strong></h4></label>
                                                <input class="form-control" id="txtAnhMinhHoa" type="file"  name="anhloai" /> 
                                            </div>
                                            
                                           
                  <div class="form-group">
                  <br>
                    <div class="col-lg-offset-2 col-lg-10">
                      <input class="btn btn-theme" id="btnthem" type="submit" name="btnSubmit" value="Thêm mới">
                      <a class="btn btn-theme04" type="button" href="loaisp.php">Thoát</a>
                    </div>
                  </div>
                </form>
                <script type="text/javascript">
        $(document).ready(function() 
        {
            $("#btnthem").click(function()
            {          
            //Kiểm tra tên tài khoản
            if ($("#inputtensp").val() == "") 
            {
                alert("Bạn chưa nhập tên loại")
                $("#inputtensp").focus()
                return false
            }

            if ($("#txtAnhMinhHoa").val() == "") {
                alert("Bạn chưa chọn ảnh")
                $("#txtAnhMinhHoa").focus()
                return false
                }
            });
            
        
        })
    </script>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->

    <!--footer end-->
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
