<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Đơn hàng chưa xử lý chi tiết</title>

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
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b><span>OGANI</span></b></a>
      <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
          <div class="input-group" style="float: right; margin-top: 20px;"> 
            <div class="form-control" style="border-radius: 4px;"><?php  echo $_SESSION['tentaikhoan'];?>  </div>                 
          </div> 
      </form>
      <!--logo end-->
      <div class="nav pull-left notify-row" id="top_menu">
        <!--  notification start -->
        <!--<ul class="nav pull-right top-menu">
          <!-- settings start -->
          <!--<li class="dropdown">
            <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="404.php">Cài đặt</a></li>
                        
                        <li><a class="dropdown-item" href="dang_xuat.php">Đăng xuất</a></li>
                    </ul>
          </li>
          <!-- settings end -->
        </ul>
        <!--  notification end -->
      </div>
      <!-- <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="dang_xuat.php">Đăng xuất</a></li>
        </ul>
      </div> -->
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
          <li  class="sub-menu">
            <a class="active"  href="javascript:;">
              <i class="fa fa-shopping-cart"></i>
              <span>Đơn hàng</span>
              </a>
            <ul  class="sub active">
              <li class="active" ><a  href="hoa_don_chua_xl.php"> Đơn hàng chưa xử lý</a></li>
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
        <h3>
          <i class="fa fa-angle-right"></i><strong>Chi tiết hóa đơn chưa xử lý</strong>
          <a  style="float: right;" class="btn btn-primary" href="hoa_don_chua_xl.php"> Quay lại</a>
        </h3>
        <?php 
          include "../connect.php"; 
          $mahoadon = $_GET['mahoadon'];
          $sql = "SELECT hoadon.mahoadon, nguoidung.tennguoidung FROM hoadon join nguoidung on nguoidung.manguoidung = hoadon.manguoidung WHERE hoadon.mahoadon = ".$mahoadon;
            $ketqua1 = $ketnoi->query($sql);
            $banGhi = $ketqua1->fetch_assoc();
         ?>
         <h5>Mã hóa đơn: <?php echo $banGhi['mahoadon'] ?> - Khách: <?php echo $banGhi['tennguoidung'] ?>  </h5>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th style="text-align: center;">STT</th>
                    <th style="text-align: center;">Mã sản phẩm</th>
                    <th style="text-align: center;">Tên sản phẩm</th>
                    <th style="text-align: center;">Ảnh sản phẩm</th>
                    <th style="text-align: center;">SL</th>
                    <th style="text-align: center;">Đơn giá</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                          //1.ket noi co so du lieu
                          include "../connect.php"; 
                          $mahoadon = $_GET['mahoadon'];
                          $sql1 = "SELECT sanpham.masp, sanpham.tensp, sanpham.anh, chitiethoadon.dongia, soluongmua, hoadon.mahoadon, nguoidung.tennguoidung, Sđt, hoadon.trangthaihoadon, ngaydat, diachi,hoadon.ghichudonhang , hoadon.tongtien FROM ((chitiethoadon join sanpham on chitiethoadon.masp = sanpham.masp) join hoadon on hoadon.mahoadon = chitiethoadon.mahoadon) join nguoidung on nguoidung.manguoidung = hoadon.manguoidung WHERE hoadon.mahoadon = ".$mahoadon;

                          //3. Thuc thi cau lenh lay du lieu mong muon
                          $ketqua = $ketnoi->query($sql1);
  

                          //4.Hien thi du lieu vua lay
                          $i=0;
                          while ($row = $ketqua->fetch_assoc()){
                              $i++;
                      ;?>   
                        <tr> 
                          <td><?php echo $i;?></td>
                          <td><strong><?php echo $row["masp"];?></strong></td>
                          <td><strong><?php echo $row["tensp"];?></strong></td>
                          <td><strong>
                            <a href="../shop-details.php?masp=<?php echo $row['masp']; ?>">
                             <img style = "width: 100px; object-fit: cover;" src="../img/product/<?php echo $row["anh"];?>" alt="">
                            </a>
                          </strong></td>
                          <td><strong><?php echo $row["soluongmua"];?></strong></td> 
                          <td><strong><?php echo $row["dongia"];?></strong></td>
                          
                     </tr> 
                      <?php
                          }
                      ;?>
                </tbody>
              </table>
            </div>
          </div>

          <!-- page end-->
        </div>
        
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
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    // function xoa(id) {
    //   if (confirm("Bạn có chắc muốn xóa tài khoản này không?")) {
    //     //
    //   }
    //   else{
    //     id.href = "#";
    //   }
    // }
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      /*nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";*/

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          /*this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>

</html>
