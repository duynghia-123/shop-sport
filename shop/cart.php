<?php
session_start();
// ini_set("display_errors","0");
// $loi="";
$ReturnURL = base64_encode($_SERVER['REQUEST_URI']);
?>
<?php

// so san pham da add vao cart
$prd = 0;
$th = 0;
$idcode = 0;
$percent = 0;
if (isset($_SESSION['cart'])) {
  $prd = count($_SESSION['cart']);
  $th = $prd;
  if ($prd == 0) {
    unset($_SESSION['cart']);
  }
}
if (isset($_SESSION['idcode'])) {
  $idcode = $_SESSION['idcode'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Serri Shop | Cart Page</title>

  <!-- Font awesome -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- SmartMenus jQuery Bootstrap Addon CSS -->
  <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
  <!-- Product view slider -->
  <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
  <!-- slick slider -->
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <!-- price picker slider -->
  <link rel="stylesheet" type="text/css" href="css/nouislider.css">
  <!-- Theme color -->
  <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
  <!-- Top Slider CSS -->
  <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

  <!-- Main style sheet -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <?php
  include("connect.php");
  ?>

  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- Start header section -->
  <?php
  include("menu.php");
  ?>

  <?php //cap nhat lai gia khi nhap vao so luong
  if (isset($_POST['update_cart'])) {
    foreach ($_POST['num'] as $id => $prd) //prd la gia tri nhap vao.moi id tuong ung voi so luong nhap vao
    {
      if (($prd > 0) and (is_numeric($prd))) //nhap vao so luong >0  thi tiep tuc tinh
      {
        $_SESSION['cart'][$id] = $prd;
      }
    }
  }
  ?>

  <?php //check code
  if (isset($_POST['check_code'])) {
    $idcode1 = $_POST["idcode"];
    $sqlcheck = "SELECT * from code where idcode = '$idcode1'";
    $resultCode = $conn->query($sqlcheck);
    if ($resultCode->num_rows != 0) {
      $_SESSION['idcode'] = $idcode1;
      echo ("<script>location.href = 'cart.php';</script>");
    } else {
      echo '<script language="javascript">';
      echo 'alert("M?? kh??ng t???n t???i!")';
      echo '</script>';
    }
  }
  ?>

  <!-- Cart view section -->
  <section id="cart-view">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table" style="border: 1px solid #fff;border-radius: 10px; background: #f9f9f9;box-shadow: 1px 1px 1px 3px #e9e9e9;">
              <div class="table-responsive">
                <h3 style="font-weight: bold;"><?php if ($th != 0) {
                                                  echo "T??m t???t m???t h??ng (" . $th . ")";
                                                } else {
                                                  echo "B???n ch??a ch???n s???n ph???m n??o!";
                                                } ?></p> <small></small>
                </h3>
                <?php if ($th != 0) : ?>
                  <form method="post">
                    <table class="table">
                      <thead>
                        <tr>
                          <th></th>
                          <th>S???n ph???m</th>
                          <th>Gi??</th>
                          <th>S??? l?????ng</th>
                          <th>T???ng</th>
                          <th>X??a</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sum_all = 0;
                        $sum_sp = 0;
                        if (isset($_SESSION['cart'])) {
                          foreach ($_SESSION['cart'] as $id => $prd) {
                            $arr_id[] = $id;
                          }
                          $str_id = implode(',', $arr_id);
                          $item_query = "SELECT * FROM  products WHERE id IN ($str_id) ORDER BY id ASC";
                          $item_result = mysqli_query($conn, $item_query);
                          while ($rows = mysqli_fetch_array($item_result)) {
                        ?>
                            <tr>
                              <td><a href="product-detail.php?id=<?php echo $rows['id']; ?>"><img src="<?php echo $rows['images']; ?>" alt="img"></a></td>
                              <td><a class="aa-cart-title" href="product-detail.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></a>
                                <br />
                                Size:
                                <select name="ipsize" style="background: none repeat scroll 0 0 #FFFFFF;
                                    border: 1px solid #E5E5E5;
                                    border-radius: 5px 5px 5px 5px;
                                    box-shadow: 0 0 5px #E8E8E8 inset;
                                    ">
                                  <?php
                                  $strsize = $rows['size'];
                                  $varSize = explode(',', $strsize);
                                  foreach ($varSize as $value) {
                                    echo "<option value='" . $value . "'>" . $value . "</option>";
                                  }
                                  ?>
                                </select>
                              </td>

                              <?php
                              $min = $rows['status'] == 0 ? 0 : 1;
                              $max = $rows['status'] == 0 ? 0 : $rows['status'];
                              ?>

                              <td><?php echo number_format($rows['price']); ?>???</p>
                              </td>
                              <td>
                                <input class="aa-cart-quantity" type="number" name="num[<?php echo $rows['id']; ?>]" max="<?php echo $max; ?>" min="<?php echo $min; ?>" value="<?php if ($max == 0) {
                                                                                                                                                                                echo 0;
                                                                                                                                                                              } else echo $_SESSION['cart'][$rows['id']]; ?>">
                              </td>
                              <td><?php echo number_format($rows['price'] * $_SESSION['cart'][$rows['id']]); ?>???</td>
                              <?php
                              $sum_all += $rows['price'] * $_SESSION['cart'][$rows['id']];
                              ?>
                              <td>
                                <a class="aa-remove-product" href="delcart.php?id=<?php echo $rows['id']; ?>&return_url=<?php echo $ReturnURL; ?>"><span aria-hidden="true"><i class="fa fa-close" style="color: red;"></i></span></a>

                              </td>
                            </tr>
                        <?php
                          }
                        }
                        ?>

                        <tr>
                          <td colspan="7" class="aa-cart-view-bottom">
                            <form method="post">
                              <div class="aa-cart-coupon">
                                <input class="aa-coupon-code" type="text" placeholder="Nh???p m??" name="idcode">
                                <input class="aa-cart-view-btn" type="submit" value="Ki???m tra" name="check_code">
                              </div>
                            </form>
                            <input class="aa-cart-view-btn" type="submit" name="update_cart" value="C???p nh???t l???i gi??? h??ng">
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </form>
                <?php endif ?>
              </div>

              <?php if ($th != 0) : ?>
                <!-- Cart Total view -->
                <div class="cart-view-total">
                  <h4>T??nh ti???n</h4>
                  <table class="aa-totals-table">
                    <tbody>
                      <tr>
                        <th>T???ng ti???n h??ng</th>
                        <td><?php echo number_format($sum_all); ?>???</td>
                      </tr>
                      <tr>
                        <th>M??:
                          <?php
                          if ($idcode) {
                            echo $idcode;
                          }
                          $giam = 0;
                          ?>
                        </th>
                        <td>
                          <?php //check code
                          if ($idcode) {
                            $sqlcheck = "SELECT * from code where idcode = '$idcode'";
                            if ($resultCode = $conn->query($sqlcheck)) {
                              while ($rs = mysqli_fetch_array($resultCode)) {
                                $percent = $rs['percent'];
                                $giam = ($sum_all / 100) * $percent;
                                echo "-" . number_format($giam) . "?? (" . $percent . "%)";
                              }
                            } else {
                              echo "-0??";
                            }
                          } else {
                            echo "-0??";
                          }
                          ?>
                        </td>
                      </tr>
                      <tr>
                        <th>T???ng c???ng</th>
                        <td><?php echo number_format($sum_all - $giam); ?>???</td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="checkout.php" class="aa-cart-view-btn">mua h??ng</a>
                </div>
              <?php endif ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Cart view section -->


  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>????ng k?? nh???n tin</h3>
            <p>H??y ????? l???i email c???a b???n ????? nh???n th??ng b??o m???i nh???t c???a ch??ng t??i!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Email">
              <input type="submit" value="????ng k??">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <!-- footer -->
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-footer-top-area">
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="aa-footer-widget">
                    <h3>V??? CH??NG T??I</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Gi???i Thi???u Serri Shop</a></li>
                      <li><a href="#">Ch????ng Tr??nh</a></li>
                      <!--                     <li><a href="#">Blogger Th???i Trang</a></li> -->
                    </ul>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="aa-footer-widget">
                    <div class="aa-footer-widget">
                      <h3>H??? TR??? KH??CH H??NG</h3>
                      <ul class="aa-footer-nav">
                        <li><a href="#">Ph?? V???n Chuy???n</a></li>
                        <li><a href="#">Tr??? L???i</a></li>
                        <li><a href="#">H?????ng D???n ?????t H??ng</a></li>
                        <li><a href="#">L??m Th??? N??o ????? Theo D??i</a></li>
                        <li><a href="#">H?????ng D???n K??ch Th?????c</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="aa-footer-widget">
                    <div class="aa-footer-widget">
                      <h3>D???CH V??? KH??CH H??NG</h3>
                      <ul class="aa-footer-nav">
                        <li><a href="#">Li??n H??? Ch??ng T??i</a></li>
                        <li><a href="#">Ph????ng Th???c Thanh To??n</a></li>
                        <li><a href="#">??i???m Th?????ng</a></li>

                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="aa-footer-widget">
                    <div class="aa-footer-widget">
                      <h3>K???T N???I V???I CH??NG T??I</h3>
                      <address>
                        <p>125 Nguy???n V??n Linh, ???? N???ng</p>
                        <p><span class="fa fa-phone"></span> 0776555522</p>
                        <p><span class="fa fa-envelope"></span>serri@gmail.com</p>
                      </address>
                      <div class="aa-footer-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                        <a href="#"><span class="fa fa-youtube"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-footer-bottom-area">
              <!-- <p>Designed by <a href="404.html">Thu Thang VKU</a></p> -->
              <div class="aa-footer-payment">
                <span class="fa fa-cc-mastercard"></span>
                <span class="fa fa-cc-visa"></span>
                <span class="fa fa-paypal"></span>
                <span class="fa fa-cc-discover"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script>

</body>

</html>