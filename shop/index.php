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
  <title>Serri Shop | Home</title>
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/nouislider.css">
  <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
  <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">
  <link href="css/style.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<!--   onload="checkCookie()" -->

<body>
  <?php
  include("connect.php");
  ?>

  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- Start header section -->
  <?php
  include("menu.php");
  ?>
  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <!-- <img data-seq src="img/slider/banner2.jpg" alt="slide img" /> -->
                <img data-seq src="img/slider/banner-sport-1.png" alt="slide img" />
              </div>

            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <!-- <img data-seq src="img/slider/banner1.jpg" alt="slide img" /> -->
                <img data-seq src="img/slider/banner-sport.jpg" alt="slide img" />
              </div>
            </li>

          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">
                    <!-- <img src="img/women/anhduoibn1.jpg" alt="img" style="height: 570px"> -->
                    <img src="img/women/anhduoibn-chinh.jpg" alt="img" style="height: 570px">
                    <div class="aa-prom-content">
                      <span>25% Off</span>
                      <h4><a href="#">Serri X Allure By Reia</a></h4>
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">
                      <!-- <img src="img/women/W1-phu.jpg" alt="img"> -->
                      <img src="img/women/W1-chinh.jpg" alt="img">
                      <div class="aa-prom-content">
                        <span>MOTF PREMIUM</span>
                        <h4><a href="#"></a>real</h4>
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">
                      <img src="img/women/anhduoibn2.jpg-chinh.jpg" alt="img">
                      <div class="aa-prom-content">
                        <span>Sale Off</span>
                        <h4><a href="#">dailydrops</a></h4>
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">
                      <!-- <img src="img/women/anhduoibn3.jpg-phu.png" alt="img"> -->
                      <img src="img/women/anhduoibn3.jpg-chinh.png" alt="img">
                      <div class="aa-prom-content">
                        <span>New</span>
                        <h4><a href="#">Serri BASICS</a></h4>
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">
                      <!-- <img src="img/women/W2-phu.jpg" alt="img"> -->
                      <img src="img/women/W2-chinh.jpg" alt="img">
                      <div class="aa-prom-content">
                        <span>15% Off</span>
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
  </section>
  <!-- / Promo section -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                <ul class="nav nav-tabs aa-products-tab">
                  <li class="active"><a href="#men" data-toggle="tab">H??ng m???i</a></li>
                  <!-- <li><a href="#women" data-toggle="tab">?????M</a></li> -->
                  <li><a href="#women" data-toggle="tab">QU???N</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <!-- Start men product category -->
                  <div class="tab-pane fade in active" id="men">
                    <ul class="aa-product-catg">
                      <!-- hang 1 san pham-->
                      <!-- start single product item -->
                      <?php
                      $new_query = "SELECT * FROM products order by id desc limit 8";
                      $new_res = mysqli_query($conn, $new_query);
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
                    <a class="aa-browse-btn" href="product.php">T???t c??? s???n ph???m <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                  <!-- / men product category -->
                  <!-- start dam product category -->
                  <div class="tab-pane fade" id="women">
                    <ul class="aa-product-catg">
                      <?php
                      $new_query = "SELECT * FROM products where category=N'?????m' order by id desc limit 8";
                      $new_res = mysqli_query($conn, $new_query);
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
                    <a class="aa-browse-btn" href="product.php?sort=?????m">Xem th??m<span class="fa fa-long-arrow-right"></span></a>
                  </div>
                  <!-- / dam product category -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
  <!-- banner section -->
  <section id="aa-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-banner-area">
              <a href="#"><img src="img/index/bn34-phu.jpg " alt="fashion banner img"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- popular section -->
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
              <ul class="nav nav-tabs aa-products-tab">
                <!-- <li class="active"><a href="#popular" data-toggle="tab">H??NG M???I</a></li> -->
                <li class="active"><a href="#featured" data-toggle="tab">B??N CH???Y</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                    <?php
                    $new_query = "SELECT * FROM products where ratings = 2 order by id limit 8";
                    $new_res = mysqli_query($conn, $new_query);
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
                  <a class="aa-browse-btn" href="product.php?fill=2">Xem th??m<span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / popular product category -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>MI???N PH?? V???N CHUY???N</h4>
                <P>D??nh cho c??c s???n ph???m ????? ??i???u ki???n</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>7 ng??y ?????i tr???</h4>
                <P>B???n c?? th??? ?????i tr??? s???n ph???m trong v??ng 7 ng??y</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>H??? tr??? 24/7</h4>
                <P>Ch??ng t??i c?? ?????i ng?? s??? h??? tr??? b???n h???t m??nh</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->

  <!-- Latest Blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <h2>TIN T???C</h2>
            <div class="row">
              <!-- single latest blog -->
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">
                    <!-- <a href="#"><img src="img/index/blog1-phu.jpg" alt="img"></a> -->
                    <a href="#"><img src="img/index/blog1-chinh.jpg" alt="img"></a>
                    <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>15K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>826</a>
                      <a href="#"><i class="fa fa-comment-o"></i>120</a>
                      <span href="#"><i class="fa fa-clock-o"></i>12/03/2021</span>
                    </figcaption>
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Kyrgios mu???n gi???i ngh??? s???m sau th???m b???i ??? Laver Cup</a></h3>
                    <p>T??i c???m th???y b???n th??n kh??ng c??n g?? ????? ch???ng t??? n???a. T??i t??? h??o v???i nh???ng g?? l??m ???????c trong s??? nghi???p. Vi???c g??p m???t ??? Laver Cup l?? ph???n th?????ng. T??i lu??n c??? g???ng khi v??o s??n v?? ????nh gi?? cao t??nh ?????ng ?????i c???a Laver Cup. Nh??ng t??i kh??ng ph???i m???u tay v???t s??? thi ?????u b???n b???. T??i s??? treo v???t s???m trong hai, ba n??m t???i.</p>
                    <a href="#" class="aa-read-mor-btn">?????c th??m <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
              <!-- single latest blog -->
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">
                    <!-- <a href="#"><img src="img/index/blog2-phu.jpg" alt="img"></a> -->
                    <a href="#"><img src="img/index/blog2-chinh.jpg" alt="img"></a>
                    <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>25K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>1226</a>
                      <a href="#"><i class="fa fa-comment-o"></i>520</a>
                      <span href="#"><i class="fa fa-clock-o"></i>10/03/2021</span>
                    </figcaption>
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">K???t qu??? c???u l??ng b??n k???t Sudirman Cup: Lee Zii Jia ng??ng cu???ng khi??u kh??ch v?? h??? Momota!</a></h3>
                    <p>C?? l??? do t???ng thua Momota ??? v??ng b???ng Sudirman Cup 2021 n??n Lee Zii Jia b??? kh???p, ????? cho s??? 1 th??? gi???i ng?????i Nh???t nhanh ch??ng t???o c??ch bi???t ??? ?????u game 1. Nh??ng sau ????, t???n d???ng Momota ????ng kh??ng ch???c tay, ??KV?? SEA Games v??ng l??n v?? b???t ng??? th???ng ng?????c 22-20.</p>
                    <a href="#" class="aa-read-mor-btn">?????c th??m <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
              <!-- single latest blog -->
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">
                    <!-- <a href="#"><img src="img/index/blog3-phu.jpg" alt="img"></a> -->
                    <a href="#"><img src="img/index/blog3-chinh.jpg" alt="img"></a>
                    <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>28K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>1426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>760</a>
                      <span href="#"><i class="fa fa-clock-o"></i>21/02/2021</span>
                    </figcaption>
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Tr???n Th??? Thanh Th??y ch??nh th???c ?????u qu??n cho CLB PFU Bluecats Nh???t B???n</a></h3>
                    <p>Ng??y h??m qua, t??? s??ng s???m Thanh Th??y ???? di chuy???n th???ng t??? Long An l??n s??n bay T??n S??n Nh???t, tr?????c khi ch??nh th???c c?? m???t t???i Nh???t B???n. Th???c ra, Tr???n Th??? Thanh Th??y c?? th??? ???? g??p m???t ??? Nh???t B???n s???m h??n tuy nhi??n do t??nh h??nh d???ch b???nh Covid-19 ph???c t???p b??ng ph??t t???i TP. H??? Ch?? Minh.</p>
                    <a href="#" class="aa-read-mor-btn">?????c th??m<span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest Blog -->

  <!-- Client Brand -->
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="img/index/sl3-chuan.jpg" alt="java img"></a></li>
              <li><a href="#"><img src="img/index/sl1-chuan.jpg" alt="java img"></a></li>
              <li><a href="#"><img src="img/index/sl4-chuan.jpg" alt="java img"></a></li>
              <li><a href="#"><img src="img/index/sl5-chinh.jpg" alt="java img"></a></li>
              <li><a href="#"><img src="img/index/sl6-chinh.jpg" alt="java img"></a></li>
              <li><a href="#"><img src="img/index/sl7-chinh.jpg" alt="java img"></a></li>
              <li><a href="#"><img src="img/index/sl8-chinh.jpg" alt="java img"></a></li>
              <li><a href="#"><img src="img/index/sl9-chinh.jpg" alt="java img"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client Brand -->

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
  <!-- <script src="js/login.js"></script>  -->

</body>

</html>