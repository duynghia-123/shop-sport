<?php
session_start();
// ini_set("display_errors","0");
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
  <style type="text/css">
    .form-control {
      margin: 0px;
      border: 1px solid #ced4da;
      padding: 6px;
      border-radius: 10px;
    }
  </style>
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
        <!-- top tiles -->
        <div class="row" style="display: inline-block;">
          <!-- <h1>TH??M S???N PH???M</h1> -->
        </div>
        <!-- /top tiles -->

        <div class="row" style="margin: 50px;">
          <div class="col-md-12 col-sm-12 ">
            <div style="text-align: center;font-size: 26px">
              <p>
              <h1>M?? GI???M GI??</h1>
              </p>
            </div>
            <?php
            if (isset($_POST['add-code'])) // neu bien ok ton tai  
            {
              $ipcode = $_POST['ipcode'];
              $ipgiam = $_POST['ipgiam'];
              $ipcounts = $_POST['ipcounts'];
              $ipstart = $_POST['ipstart'];
              $ipfinish = $_POST['ipfinish'];
              // `id`, `idcode`, `percent`, `description`, `counts`, `start`, `finish`

              $upload_query = mysqli_query($conn, "INSERT INTO code(idcode, percent, counts, start, finish) VALUES ('" . $ipcode . "'," . $ipgiam . ",'" . $ipcounts . "','" . $ipstart . "','" . $ipfinish . "')");
              if ($upload_query) {
                echo "<h5 style='color: blue'>Th??m th??nh c??ng m??: <i>" . $ipcode . ", gi???m: " . $ipgiam . "%</i></h5>";
              } else {
                echo "???? c?? l???i x???y ra: " . mysqli_error($conn);
              }
            }
            ?>
            <form action="code.php" method="post" name="form_code">
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="inputCity">M?? gi???m gi??</label>
                  <input type="text" class="form-control" name="ipcode" required value="<?php echo 'serrishop' . rand(100, 1000) . rand(100, 1000) . rand(100, 1000);   ?>">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputState">Gi???m %</label>
                  <input type="text" class="form-control" name="ipgiam" required value="20">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">S??? l?????ng</label>
                  <input type="text" class="form-control" name="ipcounts" required value="2">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">B???t ?????u</label>
                  <input type="date" class="form-control" name="ipstart" required value="<?php echo date('Y-m-d'); ?>">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">K???t th??c</label>
                  <input type="date" class="form-control" name="ipfinish" required value="<?php echo date('Y-m-d'); ?>">
                </div>
                <div class="form-group col-md-1">
                  <label for="inputZip">.</label>
                  <button type="submit" class="btn btn-primary form-control" name="add-code">T???o m??</button>
                </div>
              </div>
            </form>

            <table class="table">
              <p style="margin-bottom: 30px;"></p>
              <?php
              // SELECT `id`, `idcode`, `percent`, `description`, `counts`, `start`, `finish` FROM `code` WHERE 1
              $result = mysqli_query($conn, "SELECT * FROM code ORDER BY id DESC");
              ?>

              <thead class="thead-dark">
                <tr>
                  <th scope="col">M?? gi???m gi??</th>
                  <th scope="col">Gi???m %</th>
                  <!-- <th scope="col">M?? t???</th> -->
                  <th scope="col">C??n l???i</th>
                  <th scope="col">Ng??y b???t ?????u</th>
                  <th scope="col">K???t th??c</th>
                  <th scope="col">X??A/S???A</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tr>
                    <th scope="row"><?php echo $row['idcode'] ?></th>
                    <td><?php echo $row['percent']; ?></td>
                    <!-- <td><?php echo $row['description'] ?></td> -->
                    <td><?php echo $row['counts'] ?></td>
                    <td><?php echo $row['start'] ?></td>
                    <td><?php echo $row['finish'] ?></td>
                    <td>
                      <button type="button" class="btn btn-danger" onclick="return confirm('B???n ch???c ch???n x??a!!?')"><a href="delcode.php?id=<?php echo $row['id']; ?>">X??a</a></button>
                      <button type="button" class="btn btn-warning" onclick="thongbao();">Ch???nh s???a</button>
                    </td>
                  </tr>
                <?php
                } ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /page content -->
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
    <script type="text/javascript">
      function thongbao() {
        alert("Ch??a ho??n thi???n h??nh ?????ng n??y!");
      }
    </script>

</body>

</html>