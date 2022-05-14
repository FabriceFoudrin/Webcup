<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="./inc/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="./inc/css/aos.css" rel="stylesheet">  
    <link href="./inc/css/swiper-bundle.min.css" rel="stylesheet" >
    <link href="./assets/font/font-awesome.css" rel="stylesheet">
    <link href="./inc/css/styles.css" rel="stylesheet">

    <title>Capsule corporation</title>
  </head>
  <body class="header-fixed main" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
        <!-- preloade -->
        <div class="preload preload-container">
            <div class="preload-logo"></div>
        </div>
        
        <!-- /preload -->
    <div id="wrapper">
    <!-- Header -->
        <?php 
            include_once("./template/navbar.php");
            include_once("./template/header.php");
            include_once("./template/about.php");
            include_once("./template/roadmap.php");
            include_once("./template/product.php");
            include_once("./template/team.php");
            include_once("./template/faq.php");
            include_once("./template/footer.php"); 
        ?>
    <!-- end Header -->

    <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="header-popup">
                    <h5>Connect to a wallet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-body center">
                    <div class="box-wallet-inner">
                        <div class="sc-box">
                            <div class="img">
                                <img src="assets/images/common/icon-1.png" alt="Image">
                            </div>
                            <h6 class="heading"><a href="login.html">Meta Mask</a> </h6>
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <div class="sc-box">
                            <div class="img">
                                <img src="assets/images/common/icon-6.png" alt="Image">
                            </div>
                            <h6 class="heading"><a href="login.html"> Bitski</a></h6>
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <div class="sc-box">
                            <div class="img">
                                <img src="assets/images/common/vector.png" alt="Image">
                            </div>
                            <h6 class="heading"><a href="login.html">Fortmatic</a> </h6>
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <div class="sc-box">
                            <div class="img">
                                <img src="assets/images/common/icon-2.png" alt="Image">
                            </div>
                            <h6 class="heading"><a href="login.html">Coinbase Wallet</a> </h6>
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <div class="sc-box">
                            <div class="img">
                                <img src="assets/images/common/icon-3.png" alt="Image">
                            </div>
                            <h6 class="heading"><a href="login.html">Authereum</a> </h6>
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <div class="sc-box">
                            <div class="img">
                                <img src="assets/images/common/icon-4.png" alt="Image">
                            </div>
                            <h6 class="heading"><a href="login.html">Kaikas</a> </h6>
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    </div>
    <a id="scroll-top"></a>
    <script src="inc/js/jquery.min.js"></script>
    <script src="inc/js/bootstrap.min.js"></script>
    <script src="inc/js/swiper-bundle.min.js"></script>
    <script src="inc/js/swiper.js"></script>
    <script src="inc/js/app.js"></script>
    <script src="inc/js/jquery.easing.js"></script>
     <script src="inc/js/parallax.js"></script>
     <script src="inc/js/jquery.magnific-popup.min.js"></script>
     <script src="inc/js/aos.js"></script>



<!-- Mirrored from cyboxhtml.surielementor.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 May 2022 12:18:05 GMT -->
</body>
</html>