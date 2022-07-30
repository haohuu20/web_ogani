 <?php 
    // Mục đích: kiểm tra xem bạn có quyền truy cập trang này hay không thông qua biến $_SESSION['phienDangNhap'] = 1 --> được phép truy cập; và ngược lại.
    session_start();
    include "../connect.php";
    if(!isset($_SESSION['phienDangNhap'])) {
      echo "
            <script type='text/javascript'>
                window.alert('Bạn không được phép truy cập');
                window.location.href='../dangnhap.php';
            </script>
        ";
    }
    if (isset($_SESSION['quyen']) != 1) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không được phép truy cập');
                window.location.href='../dangnhap.php';
            </script>
        ";
      }
        
    
;?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>OGANI| Site quản lý</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

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
            <a class="active" href="index.php">
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
              <li><a href="hoa_don_chua_xl.php">  Đơn hàng chưa xử lý</a></li>
              <li><a href="hoa_don_da_xl.php">  Đơn hàng đã xử lý</a></li>
            </ul>
          </li>         
          <li class="sub-menu">
            <a href="san_pham_organic.php">
              <i class="fa fa-tree"></i>
              <span >Sản phẩm</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="loaisp.php">
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
        <div class="row">
        
          <div class="col-lg-10 main-chart">
            
            <!-- /row -->
            <div class="row">
              <!-- WEATHER PANEL -->
              <div class="col-xs-12 col-md-4 mb">
                <div class="weather7 pn">
                  
                  <i class="fa fa-shopping-cart fa-5x"></i>                 
                  <h2><a style="color: white" href="hoa_don_chua_xl.php">Đơn hàng <br>Đơn hàng chờ xử lý</a></h2>
               
                </div>
              </div>
              <div class="col-xs-12 col-md-4 mb">
                <div class="weather4 pn">
                  
                  <i class="fa fa-calendar-check-o fa-5x"></i>                 
                  <h2><a style="color: white" href="hoa_don_da_xl.php">Đơn hàng <br>Đơn hàng đã xử lý</a></h2>
               
                </div>
              </div>
              <div class=" col-md-4 mb">
                <div class="weather pn">
                  
                  <i class="fa fa-tree fa-5x"></i>                 
                  <h2><a style="color: white" href="san_pham_organic.php">Sản phẩm</a></h2>
                
                </div>
              </div>
                <!-- /Message Panel-->
              <div class=" col-md-4 mb">
                <div class="weather2 pn">
                  
                  <i class="fas fa-list-alt fa-5x"></i>                 
                  <h2><a style="color: white" href="loaisp.php">Loại sản phẩm</a></h2>
                  
                </div>
              </div>
           
              <div class=" col-md-4 mb">
                <div class="weather6 pn">
                  <a href="nguoi_dung.php"><i class="fa fa-hand-peace-o fa-5x"></i></a>
                  <h2><a style="color: white" href="nguoi_dung.php"> Người dùng</a></h2>
                
                </div>
              </div>
              <div class=" col-md-4 mb">
                <div class="weather5 pn">
                  <i class="fa fa-newspaper-o fa-5x"></i>                 
                  <h2><a style="color: white" href="tin_tuc.php"> Tin tức</a></h2>
                 
                </div>
              </div>
              <div class=" col-md-4 mb">
                <div class="weather1 pn">
                  <i class="fa fa-comment fa-5x"></i>                 
                  <h2><a style="color: white" href="binh_luan.php"> Bình luận</a></h2>
                 
                </div>
              </div>
              
              <div class=" col-md-4 mb">
                <div class="weather8 pn">  
                  <i class="material-icons" style="font-size:60px">email</i>               
                  <h2><a style="color: white" href="lien_he.php"> Liên hệ</a></h2>
                
                </div>
              </div>

              
              <!-- /col-md-8  -->
            </div>
            
            <!-- /row -->
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
           <div class="col-lg-2 ">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            
            <!-- RECENT ACTIVITIES SECTION -->
            
            <!-- First Activity -->
            
            <!-- USERS ONLINE SECTION -->
           
            <!-- First Member -->
            
            <!-- Second Member -->
            
            <!-- Third Member -->
            
            <!-- Fourth Member -->
            
            <!-- Second Member -->
            
            
            <!-- CALENDAR-->
            <!--<div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>-->
            </div>
            <!-- / calendar -->
          </div>
        <!-- /row -->
      </section>
    </section>

    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <!--<script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Developed by <a href="http://alvarez.is" target="_blank" style="color:#4ECDC4">Alvarez.is</a>.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>-->
  <!--<script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>-->
</body>

</html>
