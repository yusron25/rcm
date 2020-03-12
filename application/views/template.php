<!DOCTYPE html>
<html lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="description" content="Rajawali Cahaya Mandiri">
    <meta name="author" content="PT Rajawali Cahaya Mandiri">
    <meta name="keywords" content="Rajawali Cahaya Mandiri,Rajawali Cahaya Mandiri Indonesia,integrated logistics services,comprising door to door distribution,warehousing,staffing stripping,trucking,custom clearance,one stop shipping,PT Rajawali Cahaya Mandiri">

    <!-- MS Tile - for Microsoft apps-->
    <meta name="msapplication-TileImage" content="https://doqumentasi.id/rcm/assets/images/logo/logo-rcm.png">    

    <!-- fb & Whatsapp -->

    <!-- Site Name, Title, and Description to be displayed -->
    <meta property="og:site_name" content="PT Rajawali Cahaya Mandiri">
    <meta property="og:title" content="PT Rajawali Cahaya Mandiri">
    <meta property="og:description" content="Rajawali Cahaya Mandiri">
    <meta property="og:keywords" content="Rajawali Cahaya Mandiri,Rajawali Cahaya Mandiri Indonesia,integrated logistics services,comprising door to door distribution,warehousing,staffing stripping,trucking,custom clearance,one stop shipping,PT Rajawali Cahaya Mandiri">
    <!-- Image to display -->
    <!-- Replace   «example.com/image01.jpg» with your own -->
    <meta property="og:image" content="https://doqumentasi.id/rcm/assets/images/logo/logo-rcm.png">

    <!-- No need to change anything here -->
    <meta property="og:type" content="website">
    <meta property="og:image:type" content="image/png">

    <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">

    <!-- Website to visit when clicked in fb or WhatsApp-->
    <meta property="og:url" content="https://rcm.co.id">
    
    <title>PT. Rajawali Cahaya Mandiri</title>


    <!-- <base href="<?=base_url()?>" target="_blank"> -->
    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo/logo-rcm.png" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/appside/assets/css/bootstrap.min.css">
    <!-- icofont -->
    <link rel="stylesheet" href="<?=base_url()?>assets/appside/assets/css/fontawesome.5.7.2.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="<?=base_url()?>assets/appside/assets/css/flaticon.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/appside/assets/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?=base_url()?>assets/appside/assets/css/owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?=base_url()?>assets/appside/assets/css/magnific-popup.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="<?=base_url()?>assets/appside/assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="<?=base_url()?>assets/appside/assets/css/responsive.css">

    
    <!-- jquery -->
    <script src="<?=base_url()?>assets/appside/assets/js/jquery.js"></script>

    <!-- bootstrap -->
    <script src="<?=base_url()?>assets/appside/assets/js/bootstrap.min.js"></script>
</head>

<body>
    
<!-- navbar area start -->
<nav class="navbar navbar-area navbar-expand-lg nav-absolute black nav-style-01 header-style-09 " style="position: fixed;
background-color:#f9f9f9;z-index: 3;">
    <div class="container nav-container">
        <div class="responsive-mobile-menu">
            <div class="logo-wrapper">
                <a href="/" class="logo">
                    <img src="<?=base_url()?>assets/images/logo/logo-rcm-head.png" alt="Maxco Logo" style="width: 110px">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#appside_main_menu" 
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="appside_main_menu">
            <ul class="navbar-nav">
                <li class="current-menu-item">
                    <a href="<?=base_url()?>#home"><?=$this->lang->line('home') ?></a>
                </li>                
                <li><a href="<?=base_url()?>#services"><?=$this->lang->line('service') ?></a></li>
                <li><a href="<?=base_url()?>#profile"><?=$this->lang->line('profile') ?></a></li>
                <li><a href="#"><?=$this->lang->line('gallery') ?></a></li>
                <li><a href="<?=base_url()?>#contact"><?=$this->lang->line('contact') ?></a></li>
                <li class="menu-item-has-children">
                    <a href="#">

                        <?php
                            switch ( $this->session->userdata('language') ) {
                                case 'english':
                                    ?>
                                    <img src="<?=base_url()?>assets/icon/flag/260-united-kingdom.png" style="width: 25px" alt="Langage English">
                                    <?php
                                    break;

                                case 'indonesian':
                                     ?>
                                    <img src="<?=base_url()?>assets/icon/flag/039-indonesia.png" style="width: 25px" alt="Langage Indonesian">
                                    <?php
                                    break;
                                
                                default:
                                    ?>
                                    <img src="<?=base_url()?>assets/icon/flag/260-united-kingdom.png" style="width: 50px" alt="Langage English">
                                    <?php
                                    break;
                            }
                        ?>
                            
                    </a>
                    <ul class="sub-menu">
                        <li><a href="?lang=english"><?=$this->lang->line('english') ?></a></li>
                        <li><a href="?lang=indonesian"><?=$this->lang->line('indonesian') ?></a></li>
                    </ul>
                </li>
                 <li><a href="https://gmail.com"><i class="fa fa-envelope fa-lg"></i></a></li>
            </ul>
        </div>
    </div>
</nav>

    <!-- navbar area end -->
<?php $this->load->view($body); ?>
    <!-- header area start  -->


<!-- footer area start -->
<footer class="footer-area style-02 bg-blue" style="
    padding-top: 0px; /*background-color: #d6d5d8;*/">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-widget about_widget" style="color: black">
                        <a href="/" class="footer-logo"><img src="<?=base_url()?>assets/images/logo/logo-rcm.png" style="width: 120px" alt="Maxco Logo"></a>
                        <p style="/*color:black*/">Jl. Yos Sudarso Kav. 33<br>
                        Sunter Jaya RT. 008 RW. 011<br>
                       Tanjung Priok, Jakarta Utara 14350</p>
                        <ul class="social-icon" >
                            <li><a href="#" ><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" ><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" ><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" ><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title" >Useful Links</h4>
                        <ul>
                            <li><a href="/" ><i class="fas fa-chevron-right"></i> <?=$this->lang->line('home') ?> </a></li>
                            <li><a href="/#services" ><i class="fas fa-chevron-right"></i> <?=$this->lang->line('service') ?></a></li>
                            <li><a href="/#profile" ><i class="fas fa-chevron-right"></i> <?=$this->lang->line('profile') ?> </a></li>
                            <li><a href="/gallery" ><i class="fas fa-chevron-right"></i> <?=$this->lang->line('gallery') ?></a></li>
                            <li><a href="/#contact" ><i class="fas fa-chevron-right"></i> <?=$this->lang->line('contact') ?> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2 ">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title" >Our Customer</h4>
                        <ul>
                            <li><a href="#" ><i class="fas fa-chevron-right"></i><img style="max-height: 50px; max-width: 100px" src="<?=base_url()?>assets/images/ourcustomer/pelindo1.png" alt="pelindo 1 logo"></a></li>
                             <li><a href="#" ><i class="fas fa-chevron-right"></i><img style="max-height: 50px; max-width: 100px" src="<?=base_url()?>assets/images/ourcustomer/ipc.png" alt="temas logo"></a></li>
                            <li><a href="#" ><i class="fas fa-chevron-right"></i><img style="max-height: 50px; max-width: 100px" src="<?=base_url()?>assets/images/ourcustomer/pelindo3.png" alt="pelindo 3 logo"></a></li>

                          
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title" > </h4><br>
                        <ul>     
                            <li><a href="#" ><i class="fas fa-chevron-right"></i><img style="max-height: 50px; max-width: 100px" src="<?=base_url()?>assets/images/ourcustomer/Temas.png" alt="temas logo"></a></li>
                           
                            <li><a href="#" ><i class="fas fa-chevron-right"></i><img style="max-height: 50px; max-width: 100px" src="<?=base_url()?>assets/images/ourcustomer/samudra-indonesia.png" alt="samudera indonesia logo"></a></li>

                            
                        </ul>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title" > </h4><br>
                        <ul>                            
                            <li><a href="#" ><i class="fas fa-chevron-right"></i><img style="max-height: 50px; max-width: 100px" src="<?=base_url()?>assets/images/ourcustomer/nph.png" alt="nusantara pelabuhan handal logo"></a></li>
                            <li><a href="#" ><i class="fas fa-chevron-right"></i><img style="max-height: 50px; max-width: 100px" src="<?=base_url()?>assets/images/ourcustomer/Sinarmas.png" alt="sinarmas logo"></a></li>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-area"><!-- copyright area -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-inner"><!-- copyright inner wrapper -->
                        <div class="left-content-area" style="/*color:black*/"><!-- left content area -->
                            &copy; Copyrights 2020 PT. Rajawali Cahaya Mandiri
                        </div><!-- //. left content aera -->
                        <!-- <div class="right-content-area"> -->
                            <!-- right content area -->
                            <!-- Designed by <strong>Love</strong> -->
                        <!-- </div> -->
                        <!-- //. right content area -->
                    </div><!-- //.copyright inner wrapper -->
                </div>
            </div>
        </div>
    </div><!-- //. copyright area -->
</footer>
<!-- footer area end -->

<!-- preloader area start -->
<div class="preloader-wrapper" id="preloader">
    <div class="preloader" >
        <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>
    </div>
</div>

  <!-- preloader area end -->

  <!-- back to top area start -->
  <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
  </div>
  <!-- back to top area end -->
    
    <!-- popper -->
    <script src="<?=base_url()?>assets/appside/assets/js/popper.min.js"></script>
    <!-- owl carousel -->
    <script src="<?=base_url()?>assets/appside/assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="<?=base_url()?>assets/appside/assets/js/jquery.magnific-popup.js"></script>
    <!-- contact js-->
    <script src="<?=base_url()?>assets/appside/assets/js/contact.js"></script>
    <!-- wow js-->
    <script src="<?=base_url()?>assets/appside/assets/js/wow.min.js"></script>
    <!-- way points js-->
    <script src="<?=base_url()?>assets/appside/assets/js/waypoints.min.js"></script>
    <!-- counterup js-->
    <script src="<?=base_url()?>assets/appside/assets/js/jquery.counterup.min.js"></script>
    <!-- main -->
    <script src="<?=base_url()?>assets/appside/assets/js/main.js"></script>
    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+62 00000000", // WhatsApp number
                call_to_action: "Message us", // Call to action
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->
</body>

</html>