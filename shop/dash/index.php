<?php
session_start();
// ini_set("display_errors","0");
// $loi="";
$ReturnURL = base64_encode($_SERVER['REQUEST_URI']);
date_default_timezone_set("Asia/Saigon");
?>
<?php
$nameAd = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>Serri Shop | Admin</title>
  <!-- Bootstrap -->
  <link href="../vendors/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/css/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/css/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="../vendors/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="../vendors/css/jqvmap.min.css" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/css/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../vendors/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <?php
  include("../connect.php");
  include("checkad.php");
  ?>

  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><span>SERRI SHOP</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="../img/userdash.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>
                <?php echo $nameAd; ?>
              </h2>
            </div>
          </div>
          <!-- /menu profile quick info -->
          <br />
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <!-- <li><a href="index.php"><i class="fa fa-server" aria-hidden="true"></i>Ho???t ?????ng</a></li> -->
                <li><a><i class="fa fa-edit"></i>????n h??ng<span class="fa fa-chevron-down" aria-hidden="true"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.php">Ch??a x??c nh???n</a></li>
                    <li><a href="index.php?status=1">???? x??c nh???n</a></li>
                    <li><a href="index.php?status=2">???? g???i</a></li>
                    <li><a href="index.php?status=3">Ho??n th??nh</a></li>
                    <li><a href="index.php?status=4">???? h???y</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i>Th???ng k??<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="#">H??m nay</a></li>
                    <li><a href="#">Theo tu???n</a></li>
                    <li><a href="#">Theo th??ng</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Qu???n l?? s???n ph???m</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-product-hunt" aria-hidden="true"></i>S???n ph???m<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="addproduct.php">Th??m s???n ph???m</a></li>
                    <li><a href="allproduct.php">T??t c??? s???n ph???m</a></li>
                    <!-- <li><a href="code.php">M?? gi???m gi??</a></li> -->
                  </ul>
                </li>
                <li><a href="code.php"><i class="fa fa-codiepie" aria-hidden="true"></i>M?? gi???m gi??</a>
                </li>
                <li><a><i class="fa fa-picture-o" aria-hidden="true"></i>Banner <span class="fa fa-chevron-down"></span></a>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Qu???n l?? t??i kho???n</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-users" aria-hidden="true"></i>T??i kho???n<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="#">Nh??n vi??n</a></li>
                    <li><a href="#">Ng?????i d??ng</a></li>
                    <li><a href="#">???? kh??a</a></li>
                  </ul>
                </li>
                <li><a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i>V??? trang ch??nh</a></li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="????ng xu???t" href="../logout.php">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <?php
      include("topmenu.php");
      ?>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">

        <div class="row">
          <div class="col-md-12 col-sm-12 ">
            <p style="font-size: 36px;align-content: center;">
              <?php
              if (isset($_GET['status'])) {
                $idstatus = $_GET['status'];
                switch ($idstatus) {
                  case 1:
                    echo "C??c ????n h??ng ???? x??c nh???n!";
                    break;
                  case 2:
                    echo "C??c ????n h??ng ??ang v???n chuy???n!";
                    break;
                  case 3:
                    echo "C??c ????n h??ng ???? ho??n th??nh!";
                    break;
                  case 4:
                    echo "C??c ????n h??ng ???? h???y!";
                    break;
                  default:
                    echo ("<script>location.href = 'index.php';</script>");
                    break;
                }
                $sql = "SELECT * FROM donhang where status='$idstatus' ORDER BY id DESC";
              } else {
                echo "C??c ????n h??ng ch??a x??c nh???n!";
                $sql = "SELECT * FROM donhang where status='0' ORDER BY id DESC";
              }
              ?>
            </p>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">M?? ????n h??ng</th>
                  <th scope="col">Kh??ch h??ng</th>
                  <th scope="col">S??? ??i???n tho???i</th>
                  <th scope="col">T???ng ti???n</th>
                  <th scope="col">?????a ch??? nh???n</th>
                  <th scope="col">Ng??y ?????t</th>
                  <th scope="col">C???p nh???t</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $results = $conn->query($sql);
                if ($results->num_rows > 0) {
                  while ($obj = $results->fetch_object()) {
                    echo "<tr>";
                    // `id`, `name`, `email`, `phone`, `address`, `discount`, `total`, `orderdate`, `status`
                    echo "<td>" . $obj->id . "</td>";
                    echo "<td>" . $obj->name . "</td>";
                    echo "<td>" . $obj->phone . "</td>";
                    echo "<td>" . number_format($obj->total) . "??</td>";
                    echo "<td>" . $obj->address . "</td>";
                    echo "<td>" . $obj->orderdate . "</td>";
                    // echo "<td>".$obj->status."</td>";
                    echo "<td>
                                  <button type='button' class='btn bg-info'><a href='vieworder.php?id=" . $obj->id . "' style='color: white' >Chi ti???t</a></button>
                                </td>";
                    echo "</tr>";
                  }
                }
                ?>
                <!-- <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr> -->
              </tbody>
            </table>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <!--         <footer>
          <div class="pull-right">
            Thu Thang <a href="https://colorlib.com">Vku</a>
          </div>
          <div class="clearfix"></div>
        </footer> -->
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/jquery.flot.js"></script>
    <script src="../vendors/jquery.flot.pie.js"></script>
    <script src="../vendors/jquery.flot.time.js"></script>
    <script src="../vendors/jquery.flot.stack.js"></script>
    <script src="../vendors/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/jquery.flot.orderBars.js"></script>
    <script src="../vendors/jquery.flot.spline.min.js"></script>
    <script src="../vendors/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jquery.vmap.js"></script>
    <script src="../vendors/jquery.vmap.world.js"></script>
    <script src="../vendors/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment.min.js"></script>
    <script src="../vendors/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../vendors/custom.min.js"></script>

</body>

</html>