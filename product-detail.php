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
  <title>Serri Shop | Product Detail</title>

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

<body>
  <?php
  include("connect.php");
  ?>
  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- Start header section -->
  <?php
  include("menu.php");
  ?>


  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <?php
              if (!isset($_GET['id'])) {
                echo ("<script>location.href = 'index.php';</script>");
              }
              $id = $_GET['id'];
              $sanpham = "SELECT * FROM products where id=" . $id;
              $sanpham_res = mysqli_query($conn, $sanpham);
              $Countprd = mysqli_num_rows($sanpham_res);
              if ($Countprd == 0) {
                echo "<span class='example-val'><h3>Kh??ng t???n t???i s???n ph???m!!</h3></span>";
              }
              while ($sanpham_items = mysqli_fetch_array($sanpham_res)) {
              ?>
                <div class="row">
                  <!-- Modal view slider -->
                  <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="aa-product-view-slider">
                      <div id="demo-1" class="simpleLens-gallery-container">
                        <div class="simpleLens-container">
                          <div class="simpleLens-big-image-container"><a data-lens-image="<?php echo $sanpham_items['images']; ?>" class="simpleLens-lens-image"><img src="<?php echo $sanpham_items['images']; ?>" class="simpleLens-big-image"></a></div>
                        </div>
                        <!-- ch??? n??y l?? 3 ???nh d?????i s???n ph???m -->
                        <div class="simpleLens-thumbnails-container">
                          <a data-big-image="<?php echo $sanpham_items['images']; ?>" data-lens-image="<?php echo $sanpham_items['images']; ?>" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="<?php echo $sanpham_items['images']; ?>" style="width: 45px;height: 55px;">
                          </a>

                          <a data-big-image="<?php echo $sanpham_items['images']; ?>" data-lens-image="<?php echo $sanpham_items['images']; ?>" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="<?php echo $sanpham_items['images']; ?>" style="width: 45px;height: 55px;">
                          </a>

                          <a data-big-image="<?php echo $sanpham_items['images']; ?>" data-lens-image="<?php echo $sanpham_items['images']; ?>" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="<?php echo $sanpham_items['images']; ?>" style="width: 45px;height: 55px;">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal view content -->
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="aa-product-view-content">
                      <h3><?php echo $sanpham_items['name']; ?></h3>
                      <div class="aa-price-block">
                        <span class="aa-product-view-price"><?php echo number_format($sanpham_items['price']); ?>???</span>
                        <p class="aa-product-avilability">T??nh tr???ng:
                          <?php
                          $countsp = $sanpham_items['status'];
                          if ($countsp > 0) {
                            echo "<span style='color: green'>C??n h??ng</span>";
                          } else {
                            echo "<span style='color: red'>H???t h??ng</span>";
                          }
                          ?></p>
                      </div>
                      <!-- <p>Ch???t li???u: Acetic Acid<br/>
                          Ma??u s????c: Tr????ng va?? Xa??m
                        </p> -->
                      <h4>Size </h4>
                      <div class="aa-prod-view-size">
                        <?php
                        $strsize = $sanpham_items['size'];
                        $varSize = explode(',', $strsize);
                        foreach ($varSize as $value) {
                          echo "<a>$value</a>";
                        }
                        ?>
                        <!-- <a href="#">S</a> -->
                        <!--  <a href="#">M</a>
                          <a href="#">L</a> -->
                      </div>
                      <h4>M??u s???c: <?php echo $sanpham_items['colors']; ?></h4>
                      <div class="aa-color-tag">
                        <a href="#" class="aa-color-yellow"></a>
                        <a href="#" class="aa-color-pink"></a>
                        <a href="#" class="aa-color-white"></a>
                      </div>
                      <div class="aa-prod-quantity">
                        <form action="">
                          <select id="" name="">
                            <?php
                            if ($countsp > 0) {
                              for ($i = 1; $i <= $countsp; $i++) {
                                if ($i <= 8) {
                                  echo "<option value='$i'>$i</option>";
                                } else {
                                  break;
                                }
                              }
                            }
                            ?>
                          </select>
                        </form>
                        <p class="aa-prod-category">
                          Danh m???c: <a href="product.php?sort=<?php echo $sanpham_items['category']; ?>"><?php echo $sanpham_items['category']; ?></a>
                        </p>
                      </div>
                      <div class="aa-prod-view-bottom">
                        <?php if ($sanpham_items['status'] > 0) : ?>
                          <a class="aa-add-to-cart-btn" href="add-cart.php?id=<?php echo $sanpham_items['id']; ?>&return_url=<?php echo $ReturnURL; ?>">Th??m v??o gi??? h??ng</a>
                        <?php endif ?>
                        <a class="aa-add-to-cart-btn" href="#">So s??nh</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">M?? t???</a></li>
                <li><a href="#review" data-toggle="tab">????nh gi??</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <p style="font-weight: bold;">Ch???t Li???u & Chi Ti???t</p>
                  <ul>
                    <li><?php echo $sanpham_items['description']; ?></li>
                  </ul>
                </div>
              <?php
              }
              ?>
              <div class="tab-pane fade " id="review">
                <div class="aa-product-review-area">
                  <h4>????nh gi?? v??? s???n ph???m(2)</h4>
                  <ul class="aa-review-nav">
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="img/user11.png" alt="girl image">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><strong>My</strong> - <span>4/09/2021</span></h4>
                          <div class="aa-product-rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                          <p>Ch???t li???u t???t, h??? tr??? nhi???t t??nh, giao h??ng nhanh.</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="img/user13.png" alt="girl image">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><strong>Thu Th???ng</strong> - <span>12/04/2021</span></h4>
                          <div class="aa-product-rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-o"></span>
                          </div>
                          <p>???n trong t???m gi??.</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <h4>????nh gi?? ngay</h4>
                  <div class="aa-your-rating">
                    <p>Ch???n</p>
                    <a href="#"><span class="fa fa-star-o"></span></a>
                    <a href="#"><span class="fa fa-star-o"></span></a>
                    <a href="#"><span class="fa fa-star-o"></span></a>
                    <a href="#"><span class="fa fa-star-o"></span></a>
                    <a href="#"><span class="fa fa-star-o"></span></a>
                  </div>
                  <!-- review form -->
                  <form action="" class="aa-review-form">
                    <div class="form-group">
                      <label for="message">H??y chia s??? c???m nh???n c???a b???n v??? s???n ph???m</label>
                      <textarea class="form-control" rows="3" id="message"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                    </div>

                    <button type="submit" class="btn btn-default aa-review-submit">????nh gi??</button>
                  </form>
                </div>
              </div>
              </div>
            </div>
            <!-- Related product -->
            <div class="aa-product-related-item">
              <h3>G???i ?? cho b???n</h3>
              <ul class="aa-product-catg aa-related-item-slider">
                <?php
                $new_query = "SELECT * FROM products order by rand() limit 8";
                $new_res = mysqli_query($conn, $new_query) or die('Cannot select table!');
                while ($new_items = mysqli_fetch_array($new_res)) { ?>
                  <li>
                    <figure>
                      <a class="aa-product-img" href="product-detail.php?id=<?php echo $new_items['id']; ?>"><img style="height: 300px;width: 250px" src="<?php echo $new_items['images']; ?>" alt="polo shirt img"></a>
                      <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Th??m v??o gi??? h??ng</a>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="product-detail.php?id=<?php echo $new_items['id']; ?>"><?php echo $new_items['name']; ?></a></h4>
                        <span class="aa-product-price"><?php echo number_format($new_items['price']); ?>???</span>
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
            </div>
          </div>
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