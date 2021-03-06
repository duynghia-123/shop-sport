<?php
session_start();
// ini_set("display_errors","0");
// $loi="";
$ReturnURL = base64_encode($_SERVER['REQUEST_URI']);
?>
<?php
$prd = 0;
$th = 0;
if (isset($_SESSION['cart'])) {
  $prd = count($_SESSION['cart']);
  $th = $prd;
  if ($prd == 0) {
    unset($_SESSION['cart']);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Serri Shop | Product</title>

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

</head>
<!-- Only for product page body tag have to added .productPage class -->

<body class="productPage">
  <?php
  include("connect.php");
  ?>
  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- Start header section -->

  <?php
  include("menu.php");
  ?>
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/index/bannerproduct-1.jpg" alt="fashion img" width="100%">
    <div class="aa-catg-head-banner-area">
      <div class="container">
        <div class="aa-catg-head-banner-content">
          <h2>Fashion</h2>
          <ol class="breadcrumb">
            <li><a href="index.php" class="active">Serri Shop</a></li>
            <!-- <li class="active">Shop</li> -->
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head" style="width: 90%">
              <div class="aa-product-catg-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">S???p x???p theo</label>
                  <select name="">
                    <option value="1" selected="Default">M???c ?????nh</option>
                    <option value="2">Gi?? Gi???m d???n</option>
                    <option value="3">Gi?? T??ng d???n</option>
                    <option value="4">Mua nhi???u</option>
                    <option value="4">??ang khuy???n m??i</option>
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Hi???n th???</label>
                  <select name="">
                    <option value="1" selected="12">12</option>
                    <option value="2">24</option>
                    <option value="3">36</option>
                  </select>
                </form>
              </div>
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <?php
                if (isset($_GET['sort'])) {
                  $sorts = $_GET['sort'];
                  $new_query = "SELECT * FROM products where category=N'$sorts' order by id desc limit 12";
                } elseif (isset($_GET['fill'])) {
                  $ratings = $_GET['fill'];
                  $new_query = "SELECT * FROM products where ratings = '$ratings' order by id limit 12";
                } elseif (isset($_GET['search'])) {
                  $search = $_GET['search'];
                  $new_query = "SELECT * FROM products where category = N'$search' or name =N'$search' order by id limit 12";
                } else {
                  $new_query = "SELECT * FROM products order by id desc limit 12";
                }

                $new_res = mysqli_query($conn, $new_query);
                $Countprd = mysqli_num_rows($new_res);
                if ($Countprd == 0) {
                  echo "<span class='example-val'><h3>Kh??ng c?? d??? li???u</h3></span>";
                }

                while ($new_items = mysqli_fetch_array($new_res)) { ?>
                  <li>
                    <figure>
                      <a class="aa-product-img" href="product-detail.php?id=<?php echo $new_items['id']; ?>"><img style="height: 300px;width: 250px" src="<?php echo $new_items['images']; ?>" alt="polo shirt img"></a>
                      <?php if ($new_items['status'] > 0) : ?>
                        <a class="aa-add-card-btn" href="add-cart.php?id=<?php echo $new_items['id']; ?>&return_url=<?php echo $ReturnURL; ?>"><span class="fa fa-shopping-cart"></span>
                          Th??m v??o gi??? h??ng</a>
                      <?php endif ?>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="product-detail.php?id=<?php echo $new_items['id']; ?>"><?php echo $new_items['name']; ?></a></h4>
                        <span class="aa-product-price"><?php echo number_format($new_items['price']); ?>???</span>
                        <p class="aa-product-descrip">
                          Ma??u s????c: Tr????ng va?? Xa??m<br />
                          Ch????t li????u: Thun 2 chi???u<br />
                          ??????c ti??nh: Co gi??n t???t, ??t nh??n<br />
                        </p>
                      </figcaption>
                    </figure>
                    <div class="aa-product-hvr-content">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="Y??u th??ch"><span class="fa fa-heart-o"></span></a>
                      <a href="#" data-toggle="tooltip" data-placement="top" title="So s??nh"><span class="fa fa-exchange"></span></a>
                    </div>
                    <!-- product badge -->
                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                  </li>
                <?php } ?>

              </ul>
            </div>
            <?php if ($Countprd != 0) : ?>
              <div class="aa-product-catg-pagination">
                <nav>
                  <ul class="pagination">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li><a href="#" style="font-weight: bold;">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            <?php endif ?>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Danh m???c</h3>
              <ul class="aa-catg-nav">
                <li><a href="product.php">H??ng m???i</a></li>
                <li><a href="product.php?fill=2">B??n ch???y</a></li>
                <li><a href="product.php?sort=??o s?? mi">??o s?? mi</a></li>
                <li><a href="product.php?sort=??o ki???u">??o ki???u</a></li>
                <li><a href="product.php?sort=??o thun">??o thun</a></li>
                <li><a href="product.php?sort=??o kho??c">??o kho??c</a></li>
                <li><a href="product.php?sort=Gi??y">Gi??y</a></li>
                <li><a href="product.php?sort=Qu???n d??i">Qu???n d??i</a></li>
                <li><a href="product.php?sort=Qu???n short">Qu???n short</a></li>
                <li><a href="product.php?sort=Qu???n Nike">Qu???n Nike</a></li>
                <li><a href="product.php?sort=H??ng d???t kim">H??ng d???t kim</a></li>
              </ul>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Tags</h3>
              <div class="tag-cloud">
                <a href="#">Nhi???u m??u</a>
                <a href="#">M??u ??en</a>
                <a href="#">Tr???ng</a>
                <a href="#">Hoa</a>
                <a href="#">B??ng</a>
                <a href="#">Ng???n tay</a>
              </div>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Kho???ng gi??</h3>
              <!-- price range -->
              <div class="aa-sidebar-price-range">
                <form action="">
                  <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>
                  <span id="skip-value-lower" class="example-val">50.000</span>
                  <span id="skip-value-upper" class="example-val">100.000</span>
                  <button class="aa-filter-btn" type="submit" style="margin:15px; ">L???c</button>
                </form>
              </div>

            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>M??u s???c</h3>
              <div class="aa-color-tag">
                <a class="aa-color-white" href="#"></a>
                <a class="aa-color-green" href="#"></a>
                <a class="aa-color-yellow" href="#"></a>
                <a class="aa-color-pink" href="#"></a>
                <a class="aa-color-purple" href="#"></a>
                <a class="aa-color-blue" href="#"></a>
                <a class="aa-color-orange" href="#"></a>
                <a class="aa-color-gray" href="#"></a>
                <a class="aa-color-black" href="#"></a>
                <a class="aa-color-cyan" href="#"></a>
                <a class="aa-color-olive" href="#"></a>
                <a class="aa-color-orchid" href="#"></a>
              </div>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>???? xem g???n ????y</h3>
              <div class="aa-recently-views">
                <ul>
                  <li>
                    <a href="product-detail1.html" class="aa-cartbox-img" style="height: 112px;"><img alt="img" src="img/products/serrishop48235qu???n nike.jpg"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="product-detail1.html">Qu???n Nike d??i form ??m</a></h4>
                      <p>295,000???</p>
                    </div>
                  </li>
                  <li>
                    <a href="product-detail2.html" class="aa-cartbox-img" style="height: 112px;"><img alt="img" src="img/products/serrishop-35.jpg"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="product-detail2.html">Qu???n d??i l??ng thun k??? s???c</a></h4>
                      <p>298.000???</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- single sidebar -->
          </aside>
        </div>

      </div>
    </div>
  </section>
  <!-- / product category -->


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
                      <li><a href="#">Blogger Th??? Thao</a></li>
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
              <p>Designed by <a href="404.html">Duy Ngh??a VKU</a></p>
              <div class="aa-footer-payment">
                <span class="fa fa-cc-mastercard"></span>
                <span class="fa fa-cc-visa"></span>
                <span class="fa fa-paypal"></span>
                <span class="fa fa-cc-discover" onclick="checkCookie()"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->
  <!-- Login Modal -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>????ng Nh???p</h4>
          <!-- <form class="aa-login-form"> -->
          <div class="aa-login-form">
            <label id="result"></label><br />
            <label for="">?????a ch??? email<span>*</span></label>
            <input type="text" placeholder="" name="username" id="username">
            <label for="">M???t kh???u<span>*</span></label>
            <input type="password" placeholder="" name="password" id="password">
            <button class="aa-browse-btn" id="submit" onclick="validate()">????ng nh???p</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Ghi nh??? t??i kho???n </label>
            <p class="aa-lost-password"><a href="#">B???n qu??n m???t kh???u?</a></p>
            <div class="aa-register-now">
              B???n ch??a c?? t??i kho???n?<a href="account.html">????ng k?? ngay!</a>
            </div>
          </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>


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
  <script src="js/login.js"></script>


</body>

</html>