<?php

 $page_title = "Thank You";
    include 'includes/regheader.php';
            if (isset($_POST["submit"])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];
                

                $from = 'Feedback Form';
                $to = 'info@elitepath.org';
                $subject = 'Message from Contact Form';

                $body ="From: $name\n E-Mail: $email\n Phone: $phone\n Message:\n $message";

                // Check if name has been entered
                if (!$_POST['name']) {
                    $errName = 'Please enter your name';
                }

                // Check if email has been entered and is valid
                if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $errEmail = 'Please enter a valid email address';
                }
                
                // Check if phone has been entered
                if (!$_POST['phone']) {
                    $errPhone = 'Please enter your phone number';
                }


                //Check if message has been entered
                if (!$_POST['message']) {
                    $errMessage = 'Please enter your message';
                }
                //Check if simple anti-bot test is correct


        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errPhone && !$errMessage) {
            if (mail ($to, $subject, $body, $from)) {
                $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
            } else {
                $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
            }
        }
            }
        ?>
        
        <!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->

    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER V2 ==========-->
       <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="index.php" class="s-header__logo-link">
                                    <img class="s-header__logo-img s-header__logo-img-default" src="img/weblogo.png" width="181" height="50" alt="elitePath-Logo">
                                    <img class="s-header__logo-img s-header__logo-img-shrink" src="img/logo-elite.png" width="80" height="80" alt="elitePath-Logo">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">
                        <!-- Menu List -->                                
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider -is-active" href="index.php">Home</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#js__scroll-to-section">Services</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="cart.php">Course</a></li>
                           
                        </ul>
                        <!-- End Menu List -->

                        <!-- Menu List -->                                
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#js__scroll-to-about">About</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#js__scroll-to-contact">Contacts</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="register.php">Apply</a></li>
                           
                        </ul>
                        <!-- End Menu List -->
                    </div>
                </nav>
                <!-- End Nav -->
                
                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--lb">
                    <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="">Code-PH</a></li>
                    <li class="s-header__action-item"><a class="s-header__action-link" href="">Code Sense</a></li>
                </ul>
                <!-- End Action -->

                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--rb">
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://www.facebook.com/elitepath/?ref=aymt_homepage_panel">
                            <i class="g-padding-r-5--xs ti-facebook"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://twitter.com/elite_Path">
                            <i class="g-padding-r-5--xs ti-twitter"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                        </a>
                    </li>
                     <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://www.linkedin.com/company/11258695/">
                            <i class="g-padding-r-5--xs ti-linkedin"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">LinkedIn</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://www.instagram.com/elite_path/">
                            <i class="g-padding-r-5--xs ti-instagram"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
           
    

        <!-- Form -->
       <div id="js__scroll-to-appointment" class="g-bg-color--sky-light g-padding-y-80--xs g-padding-y-125--sm">
            <div class="container g-bg-color--white g-box-shadow__dark-lightest-v3">
                <div class="row">
                    <!-- Form -->
                     <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
            <h1 class="page-header text-center" style="color: green;">Thank You For Contacting Us. We Will Get In Touch With You</h1>
            <img src="http://www.pic4ever.com/images/thankyou.gif" border="0" >
            <img src="http://www.pic4ever.com/images/Laie_13.gif" border="0" >
   <img src="http://www.pic4ever.com/images/Banane21.gif" border="0" >
   <img src="http://www.pic4ever.com/images/Bananeyessss.gif" border="0" >
   <img src="http://www.pic4ever.com/images/Bananezorro.gif" border="0" >
   <img src="http://www.pic4ever.com/images/loveshower.gif" border="0" >
   <img src="http://www.pic4ever.com/images/balloons.gif" border="0" >
   <img src="http://www.pic4ever.com/images/29dz8zk.gif" border="0" >
   <img src="http://www.pic4ever.com/images/999.gif" border="0" >
   <img src="http://www.pic4ever.com/images/shake2.gif" border="0" >
   <img src="http://www.pic4ever.com/images/orjnfq.gif" border="0" >
   <img src="http://www.pic4ever.com/images/121.gif" border="0" >
                        </div>
                    </div>
                    <!-- End Contacts -->
                </div>
            </div>
        </div>
        <!-- End Form -->
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->

        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/masonry/jquery.masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="vendor/masonry/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.equal-height.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/masonry.min.js"></script>
        <script type="text/javascript" src="js/components/equal-height.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
    <?php include 'footer.php';?>
</html>