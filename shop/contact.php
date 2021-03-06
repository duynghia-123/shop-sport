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
  <title>Serri Shop | Contact</title>

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
  <style type="text/css">
    .content {
      width: 100%;
      display: -webkit-box;
      display: -webkit-flex;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      align-items: center;
      -webkit-box-pack: justify;
      -webkit-justify-content: space-between;
      justify-content: space-between;
      -webkit-flex-wrap: wrap;
      flex-wrap: wrap;
      margin: 0 auto;
      margin-bottom: 30px;
    }

    .faq-wrap {
      position: relative;
      width: 310px;
      height: 214px;
    }

    .faq-item {
      width: 100%;
      height: 100%;
      display: -webkit-box;
      display: -webkit-flex;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      align-items: center;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      background: #fff;
      box-shadow: 0 0 10px 2px rgb(217 220 221 / 50%);
      border-radius: 4px;
      border: 2px solid #bcbcbc;
    }

    .wrap {
      text-align: center;
    }

    .desp {
      font-size: 18px;
      font-weight: 700;
      color: #222;
      line-height: 25px;
      margin-top: 15px;
    }

    .gap {
      margin-top: 25px;
    }

    .hover-wrap {
      display: none;
    }

    .faq-item:hover+.hover-wrap {
      display: block;
      /*        background: #e5e5e5;*/
    }

    .hover-wrap1 {
      position: relative;
      z-index: 100;
      width: 350px;
      height: 244px;
      top: -15px;
      left: -20px;
      background: #fff;
      box-shadow: 0 4px 17px 4px rgb(196 196 196 / 80%);
      border-radius: 2px;
      border: 3px solid #e5e5e5;
      padding: 20px;
    }

    .title {
      font-size: 18px;
      /*color: #fff;*/
      margin-bottom: 15px;
      text-transform: capitalize;
      text-align: left;
      font-weight: bold;
    }

    .hover_bottom {
      font-size: 12px;
      font-weight: 400;
      color: #fff;
      color: blue;
    }

    .question {
      font-size: 12px;
      margin-bottom: 12px;
    }
  </style>


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


  <!-- start contact section -->
  <section id="aa-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-contact-area">
            <div class="aa-blog-archive-area">
              <div class="row">
                <div class="col-md-12" style="padding:40px;">
                  <div class="aa-blog-content" style="margin-left: 70px;margin-right: 70px;">
                    <div class="row">
                      <div class="content">
                        <div class="faq-wrap j-faq-wrap">
                          <div tabindex="0" class="faq-item" style="">
                            <div class="wrap">
                              <img src="http://img.shein.com/images3/2019/12/26/15773447793cc857c024708812c9b2659aae96f2d1.png">
                              <div class="desp">Vấn đề về đơn hàng</div>
                            </div>
                          </div>
                          <div class="hover-wrap">
                            <div class="hover-wrap1">
                              <div tabindex="0" class="title">Vấn đề về đơn hàng</div>
                              <a href="" class="question">Tôi có thể hủy đơn hàng không?</a><br />
                              <a href="" class="question">Tại sao tôi không nhận được email về đơn hàng của mình được chuyển đi?</a><br />
                              <a href="" class="question">Tại sao tôi không nhận được email xác nhận về đơn hàng của mình?</a> <br />
                              <div class="hover_bottom"><span>Xem thêm</span></div>
                            </div>
                          </div>
                        </div>

                        <div class="faq-wrap j-faq-wrap">
                          <div tabindex="0" class="faq-item" style="">
                            <div class="wrap">
                              <img src="http://img.shein.com/images3/2019/12/26/1577344792eaab69403a3c4927db7f59ee413dc1ad.png">
                              <div class="desp">Vận chuyển</div>
                            </div>
                          </div>
                          <div class="hover-wrap">
                            <div class="hover-wrap1">
                              <div tabindex="0" class="title">Vận chuyển</div>
                              <a href="" class="question">Đơn hàng của tôi ở đâu?</a><br />
                              <a href="" class="question">Bạn có giảm bớt phí vận chuyển hay không?</a><br />
                              <a href="" class="question"> Gói sẽ mất bao lâu để đến đích?</a> <br />
                              <div class="hover_bottom"><span>Xem thêm</span></div>
                            </div>
                          </div>
                        </div>

                        <div class="faq-wrap j-faq-wrap">
                          <div tabindex="0" class="faq-item" style="">
                            <div class="wrap">
                              <img src="http://img.shein.com/images3/2019/12/26/1577344815231ded157ce5e24a8f460f0fdbb70104.png">
                              <div class="desp">Trả hàng &amp; Hoàn tiền
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="faq-wrap j-faq-wrap gap">
                          <div tabindex="0" class="faq-item" style="">
                            <div class="wrap">
                              <img src="http://img.shein.com/images3/2019/12/26/15773448250984cf91efc151a67aad3e2be9dbb5ae.png">
                              <div class="desp">Thanh toán &amp; Khuyến mãi
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="faq-wrap j-faq-wrap gap">
                          <div tabindex="0" class="faq-item" style="">
                            <div class="wrap">
                              <img src="http://img.shein.com/images3/2019/12/26/1577344849f82b313896a2f997d78e77f6c1601c64.png">
                              <div class="desp">Sản phẩm &amp; Kho hàng</div>
                            </div>
                          </div>
                        </div>
                        <div class="faq-wrap j-faq-wrap gap">
                          <div tabindex="0" class="faq-item" style="">
                            <div class="wrap">
                              <img src="http://img.shein.com/images3/2019/12/26/1577344857b997d452afb4cef4939b20aae2f1b443.png">
                              <div class="desp">Tài khoản</div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="aa-contact-top">
                <h2>Chúng tôi đang chờ đợi để hỗ trợ bạn</h2>
                <p>Hãy để lại những câu hỏi của bạn vào dưới đây, chúng tôi sẽ trả lời lại bạn trong thời gian sớm nhất.</p>
              </div>
              <!-- contact map -->
              <div class="aa-contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.1056558874584!2d108.21056531466331!3d16.06000614395137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b5e8fc2767%3A0x355c74ec67255daa!2zMTI1IE5ndXnhu4VuIFbEg24gTGluaCwgVsSpbmggVHJ1bmcsIFEuIFRoYW5oIEtow6osIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1621243211658!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen loading="lazy">
                </iframe>

                <!-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
              </div>
              <!-- Contact address -->
              <div class="aa-contact-address">
                <div class="row">
                  <div class="col-md-8">
                    <div class="aa-contact-address-left">
                      <form class="comments-form contact-form" action="">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" placeholder="Tên của bạn" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="email" placeholder="Email" class="form-control">
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <textarea class="form-control" rows="3" placeholder="Nội dung"></textarea>
                        </div>
                        <button class="aa-secondary-btn">Gửi</button>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="aa-contact-address-right">
                      <address>
                        <h4>SerriShop</h4>
                        <p></p>
                        <p><span class="fa fa-home"></span>125 Nguyễn Văn Linh, Đà Nẵng</p>
                        <p><span class="fa fa-phone"></span>0776555522</p>
                        <p><span class="fa fa-envelope"></span>Email: serri@gmail.com</p>
                      </address>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Đăng ký nhận tin</h3>
            <p>Hãy để lại email của bạn để nhận thông báo mới nhất của chúng tôi!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Email">
              <input type="submit" value="Đăng ký">
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
                    <h3>VỀ CHÚNG TÔI</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Giới Thiệu Serri Shop</a></li>
                      <li><a href="#">Chương Trình</a></li>
                      <li><a href="#">Blogger Thể Thao</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="aa-footer-widget">
                    <div class="aa-footer-widget">
                      <h3>HỖ TRỢ KHÁCH HÀNG</h3>
                      <ul class="aa-footer-nav">
                        <li><a href="#">Phí Vận Chuyển</a></li>
                        <li><a href="#">Trả Lại</a></li>
                        <li><a href="#">Hướng Dẫn Đặt Hàng</a></li>
                        <li><a href="#">Làm Thế Nào Để Theo Dõi</a></li>
                        <li><a href="#">Hướng Dẫn Kích Thước</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="aa-footer-widget">
                    <div class="aa-footer-widget">
                      <h3>DỊCH VỤ KHÁCH HÀNG</h3>
                      <ul class="aa-footer-nav">
                        <li><a href="#">Liên Hệ Chúng Tôi</a></li>
                        <li><a href="#">Phương Thức Thanh Toán</a></li>
                        <li><a href="#">Điểm Thưởng</a></li>

                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="aa-footer-widget">
                    <div class="aa-footer-widget">
                      <h3>KẾT NỐI VỚI CHÚNG TÔI</h3>
                      <address>
                        <p>125 Nguyễn Văn Linh, Đà Nẵng</p>
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
              <p>Designed by <a href="404.html">Duy Nghĩa VKU</a></p>
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
          <h4>Đăng Nhập</h4>
          <!-- <form class="aa-login-form"> -->
          <div class="aa-login-form">
            <label id="result"></label><br />
            <label for="">Địa chỉ email<span>*</span></label>
            <input type="text" placeholder="" name="username" id="username">
            <label for="">Mật khẩu<span>*</span></label>
            <input type="password" placeholder="" name="password" id="password">
            <button class="aa-browse-btn" id="submit" onclick="validate()">Đăng nhập</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Ghi nhớ tài khoản </label>
            <p class="aa-lost-password"><a href="#">Bạn quên mật khẩu?</a></p>
            <div class="aa-register-now">
              Bạn chưa có tài khoản?<a href="account.html">Đăng ký ngay!</a>
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
</body>

</html>