<?php
    
    $page_title = "Registration";
    include 'includes/regheader.php';

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
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider " href="index.php">Home</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="services.php">Services</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="cart.php">Course</a></li>
                           
                        </ul>
                        <!-- End Menu List -->

                        <!-- Menu List -->                                
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="about.php">About</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="contact.php">Contacts</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider -is-active" href="register.php">Apply</a></li>
                           
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
                        <a class="s-header__action-link" href="https://www.facebook.com/elitepath">
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
                        <a class="s-header__action-link" href="#">
                            <i class="g-padding-r-5--xs ti-instagram"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
           <div class="s-faq g-bg-color--primary">
            <div class="container g-padding-y-125--xs">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="cbp cbp-l-grid-faq js__grid-faq">
                            <div class="cbp-item buying">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/>
                                        </svg>
                                        <h2 class="s-faq-grid__title">Payment Overview</h2>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            We have flexible payment plans at elitePath to ensure finance is not a barrier on your path to becoming a software developer
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item community">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1062 150q-317 121-556 362.5t-358 560.5q-20-89-20-176 0-208 102.5-384.5t278.5-279 384-102.5q82 0 169 19zm269 119q93 65 164 155-389 113-674.5 400.5t-396.5 676.5q-93-72-155-162 112-386 395-671t667-399zm-733 1334q115-356 379.5-622t619.5-384q40 92 54 195-292 120-516 345t-343 518q-103-14-194-52zm1066 58q-193-50-367-115-135 84-290 107 109-205 274-370.5t369-275.5q-21 152-101 284 65 175 115 370z"/>
                                        </svg>
                                        <h3 class="s-faq-grid__title">Rose Plan</h3>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            This is the prepaid plan. If you make complete payment before the commencement of the training, you'll be subject to a discount
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            
                         
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cbp cbp-l-grid-faq js__grid-faq">
                            <div class="cbp-item account">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1376 768q40 0 68 28t28 68v576q0 40-28 68t-68 28h-960q-40 0-68-28t-28-68v-576q0-40 28-68t68-28h32v-320q0-185 131.5-316.5t316.5-131.5 316.5 131.5 131.5 316.5q0 26-19 45t-45 19h-64q-26 0-45-19t-19-45q0-106-75-181t-181-75-181 75-75 181v320h736z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">Blossom Plan</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                           This is a pay-as-you-learn monthly payment plan. Payment will be made every month during the course of the training
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="cbp-item author">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1696 128q66 0 113 47t47 113v1216q0 66-47 113t-113 47h-1600q-66 0-113-47t-47-113v-1216q0-66 47-113t113-47h1600zm-1600 128q-13 0-22.5 9.5t-9.5 22.5v224h1664v-224q0-13-9.5-22.5t-22.5-9.5h-1600zm1600 1280q13 0 22.5-9.5t9.5-22.5v-608h-1664v608q0 13 9.5 22.5t22.5 9.5h1600zm-1504-128v-128h256v128h-256zm384 0v-128h384v128h-384z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">Daisy Plan</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                           This is the post-paid plan. Payment is made after the training and the cost is higher in comparison to the Rose and Blossom Plan.
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Accordion -->
        
    

        <!-- Form -->
       <div id="js__scroll-to-appointment" class="g-bg-color--sky-light g-padding-y-80--xs g-padding-y-125--sm">
            <div class="container g-bg-color--white g-box-shadow__dark-lightest-v3">
                <div class="row">
                    <!-- Form -->
                     <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="page-header text-center">Registration Form</h1>
                <form class="form-horizontal" role="form" method="post" action="regform.php">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" required placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            <?php echo "<p class='text-danger'>$errName</p>";?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email*</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" required placeholder="example@yahoo.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                            <?php echo "<p class='text-danger'>$errEmail</p>";?>
                        </div>
                    </div>
                          
                     <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">Phone*</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Mobile Number" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
                            <?php echo "<p class='text-danger'>$errPhone</p>";?>
                        </div>
                    </div>
                    
                    <div class="form-group ">
                    <label for="phone" class="col-sm-2 control-label"></label>
                    <select class="form-control s-form-v4__input g-padding-1-0--xs" required name="course" >
                    <option value="courses"> Courses*</option>
                        <option value="FullStack Web Development">FullStack Web Development</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                    </select>  
                         <?php echo "<p class='text-danger'>$errCourse</p>";?>
                    </div>

                    <div class="form-group">
                    <select class="form-control s-form-v4__input g-padding-1-0--xs" required name="qualification">
                        <option >Qualification*</option>
                        <option value="First School Leaving">First School Leaving</option>
                        <option value="Wassce">Wassce</option>
                         <option value="OND">OND</option>
                          <option value="HND">HND</option>
                           <option value="BSc">BSc</option>
                            <option value="MSc">MSc</option>
                             <option value="PhD">PhD</option>
                    </select>  
                          <?php echo "<p class='text-danger'>$errQualification</p>";?>
                    </div>
                
                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">About You</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                            <?php echo "<p class='text-danger'>$errMessage</p>";?>
                        </div>
                    </div>
                 
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                            <p style="color: red">Required field are marked with *</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <?php echo $result; ?>  
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
                 

                    <!-- Contacts -->
                    <div class="col-md-4 g-bg-color--primary-ltr js__form-eqaul-height-v1">
                        <div class="g-overflow--hidden g-padding-x-40--xs g-padding-y-50--xs">
                            <h2 class="g-font-size-24--xs g-color--white g-margin-b-50--xs">Reach Us</h2>
                            <ul class="list-unstyled g-margin-b-70--xs">
                                <li class="clearfix g-color--white g-margin-b-40--xs">
                                    <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                        <i class="g-font-size-20--xs g-color--white-opacity-light ti-location-pin"></i>
                                    </div>
                                    <div class="g-media__body">
                                       3rd Floor, 14 Ada George Road, Port Harcourt, <br>
                                       Rivers State, Nigeria.
                                    </div>
                                </li>
                                <li class="clearfix g-color--white g-margin-b-40--xs">
                                    <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                        <i class="g-font-size-20--xs g-color--white-opacity-light ti-headphone-alt"></i>
                                    </div>
                                    <div class="g-media__body">
                                <a href="tel:+2458099414845">+2348099414845</a>
                                <a href="tel:+234 813 282 0453​⁠​">+234 813 282 0453​⁠​</a>
                                    </div>
                                </li>
                                <li class="clearfix g-color--white g-margin-b-40--xs">
                                    <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                        <i class="g-font-size-20--xs g-color--white-opacity-light ti-email"></i>
                                    </div>
                                    <div class="g-media__body">
                                        info@elitepath.org
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-inline g-ul-li-lr-15--xs">
                                <li><a href="https://www.facebook.com/elitepath/?ref=aymt_homepage_panel"><i class="g-font-size-20--xs g-color--white-opacity ti-facebook"></i></a></li>
                                <li><a href="https://twitter.com/elite_Path"><i class="g-font-size-20--xs g-color--white-opacity ti-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/elite_path/"><i class="g-font-size-20--xs g-color--white-opacity ti-instagram"></i></a></li>
                            </ul>
                            <i class="g-font-size-150--xs g-color--white-opacity-lightest ti-comments" style="position: absolute; bottom: -1.25rem; right: -1.25rem;"></i>
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
    <?php include 'includes/footer.php';?>
</html>