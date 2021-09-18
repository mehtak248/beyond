<?php
    //set the profile data array.
    $profileData = array(
        'f_name'  => 'Michael',
        'l_name'  => 'Saint Longname',
        'image'   => 'vcard-image.jpg',
        'post'    => 'Account Executive at BEYOND FINANCIAL',
        'address_1' => '760 N. Euclid St. #104 - Anaheim, CA 92801',
        'address_2' => '1035 S. Milliken Avenue #D - Ontario, CA 91761',
        'address_3' => '24301 Southland Dr. #304 - Hayward, CA 94545',
        'phone'   => '(714) 844-7141',
        'email'   => 'info@moonstone-peo.com',
        'website' => 'http://www.moonstone-peo.com/',
    );
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beyond</title>

    <link href="assets/css/style.css" rel="stylesheet">
  </head>

  <body>
    
    <!-- Header -->
    <header>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-lg-3 col-xl-4 left-block">
                        <img src="assets/images/asa.png" class="img-fluid" />
                    </div>
                    <div class="col-sm-3 col-lg-3 col-xl-3 middle-block d-none d-lg-flex">
                        <ul>
                            <li><a href="javascript:void(0);">Ahaheim</a></li>
                            <li><a href="javascript:void(0);">Ontario</a></li>
                            <li><a href="javascript:void(0);">Hayward</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-5 col-lg-6 col-xl-5 right-block d-none d-lg-block">
                        <ul class="info">
                            <li><span>Email: </span><a href="mailto:<?php echo (isset($profileData['email']) ? $profileData['email'] : ''); ?>"><?php echo (isset($profileData['email']) ? $profileData['email'] : ''); ?></a></li>
                            <li><span>Phone: </span><a href="tel:<?php echo (isset($profileData['phone']) ? $profileData['phone'] : ''); ?>"><?php echo (isset($profileData['phone']) ? $profileData['phone'] : ''); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/images/logo.svg" class="img-fluid" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="javascript:void(0);">Staffing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">Recruiting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">Job Seekers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">Resources</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">Contact us</a>
                            </li>
                            <li class="nav-item d-none d-lg-block">
                                <a class="btn btn-blue" href="javascript:void(0);">Apply online</a>
                            </li>
                        </ul>

                        <div class="mobile-details d-lg-none">
                            <ul class="info">
                                <li><span>Email: </span><a href="mailto:info@beyondfinancialsolutions.com">info@beyondfinancialsolutions.com</a></li>
                                <li><span>Phone: </span><a href="tel:7148447170">(714) 844-7170</a></li>
                            </ul>
                            <div class="row">
                                <div class="col-6">
                                    <a class="btn btn-blue" href="javascript:void(0);">Apply online</a>
                                </div>
                                <div class="col-6 social-wrapper">
                                    <ul class="social-block">
                                        <li><a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="mobile-header d-lg-none">
            <ul>
                <li><a href="javascript:void(0);">Ahaheim</a></li>
                <li><a href="javascript:void(0);">Ontario</a></li>
                <li><a href="javascript:void(0);">Hayward</a></li>
            </ul>
        </div>
    </header>

    <!--  Banner Block -->
    <section class="banner-block vcard-banner" style="background-image: url(assets/images/banner-vcard.jpg);">
        <div class="vcard-block">
            <div class="container">
                <form method="post" action="manage-vcard.php">
                    <input type="hidden" name="action" value="create_vcard">
                    <input type="hidden" name="image" value="<?php echo (isset($profileData['image']) ? $profileData['image'] : ''); ?>">
                    <input type="hidden" name="f_name" value="<?php echo (isset($profileData['f_name']) ? $profileData['f_name'] : ''); ?>">
                    <input type="hidden" name="l_name" value="<?php echo (isset($profileData['l_name']) ? $profileData['l_name'] : ''); ?>">
                    <input type="hidden" name="post" value="<?php echo (isset($profileData['post']) ? $profileData['post'] : ''); ?>">
                    <input type="hidden" name="address_1" value="<?php echo (isset($profileData['address_1']) ? $profileData['address_1'] : ''); ?>">
                    <input type="hidden" name="address_2" value="<?php echo (isset($profileData['address_2']) ? $profileData['address_2'] : ''); ?>">
                    <input type="hidden" name="address_3" value="<?php echo (isset($profileData['address_3']) ? $profileData['address_3'] : ''); ?>">
                    <input type="hidden" name="phone" value="<?php echo (isset($profileData['phone']) ? $profileData['phone'] : ''); ?>">
                    <input type="hidden" name="email" value="<?php echo (isset($profileData['email']) ? $profileData['email'] : ''); ?>">
                    <input type="hidden" name="website" value="<?php echo (isset($profileData['website']) ? $profileData['website'] : ''); ?>">
                    <div class="heading-block">
                        <div class="row">
                            <div class="col-xl-4 image-block">
                                <img src="assets/images/<?php echo (isset($profileData['image']) ? $profileData['image'] : ''); ?>" alt="Michael Saint Longname" class="img-fluid" />
                            </div>
                            <div class="col-xl-8">
                                <h1><?php echo (isset($profileData['f_name']) ? $profileData['f_name'] : ''); ?> <br /><?php echo (isset($profileData['l_name']) ? $profileData['l_name'] : ''); ?></h1>
                                <h6><?php echo (isset($profileData['post']) ? $profileData['post'] : ''); ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="vcard-subblock">
                        <div class="row">
                            <div class="offset-xl-4 col-xl-8 vcard-right-block">
                                <ul>
                                    <li><strong>Anaheim:</strong> <?php echo (isset($profileData['address_1']) ? $profileData['address_1'] : ''); ?></li>
                                    <li><strong>Ontario:</strong> <?php echo (isset($profileData['address_2']) ? $profileData['address_2'] : ''); ?></li>
                                    <li><strong>Hayward:</strong> <?php echo (isset($profileData['address_3']) ? $profileData['address_3'] : ''); ?></li>
                                </ul>
                                <ul class="contact-info">
                                    <li>
                                        <span><img src="assets/images/icon30.png" class="img-fluid"></span>
                                        <a href="tel:<?php echo (isset($profileData['phone']) ? $profileData['phone'] : ''); ?>"><?php echo (isset($profileData['phone']) ? $profileData['phone'] : ''); ?></a>
                                    </li>
                                    <li>
                                        <span><img src="assets/images/icon31.png" class="img-fluid"></span>
                                        <a href="mailto:<?php echo (isset($profileData['email']) ? $profileData['email'] : ''); ?>"><?php echo (isset($profileData['email']) ? $profileData['email'] : ''); ?></a>
                                    </li>
                                    <li>
                                        <span><img src="assets/images/icon32.png" class="img-fluid"></span>
                                        <a href="<?php echo (isset($profileData['website']) ? $profileData['website'] : ''); ?>" target="_blank"><?php echo (isset($profileData['website']) ? $profileData['website'] : ''); ?></a>
                                    </li>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="social-info">
                                            <li>
                                                <a href="javascript:void(0);" target="_blank"><img src="assets/images/social-icon1.png" class="img-fluid"></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" target="_blank"><img src="assets/images/social-icon2.png" class="img-fluid"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="download-block">
                                            <button type="submit" class="btn btn-download">Downlaod vcard</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vcard-dots">
                        <img src="assets/images/vcard-dots.png" class="img-fluid" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-top-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="footer-top-left-block">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/images/footer-logo.svg" class="img-fluid" />
                            </a>
                            <ul>
                                <li><a href="javascript:void(0);"><img src="assets/images/facebook.svg" class="img-fluid" /></a></li>
                                <li><a href="javascript:void(0);"><img src="assets/images/linkedin.svg" class="img-fluid" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-bottom-block footer-mobile-bottom-block d-lg-none">
                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <li><a href="javascript:void(0);">Staffing</a></li>
                                    <li><a href="javascript:void(0);">Recruiting</a></li>
                                    <li><a href="javascript:void(0);">Job Seekers</a></li>
                                    <li><a href="javascript:void(0);">Services</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li><a href="javascript:void(0);">Resources</a></li>
                                    <li><a href="javascript:void(0);">About us</a></li>
                                    <li><a href="javascript:void(0);">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="footer-top-right-block">
                            <h5>Office Locations</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <h6>Anaheim:</h6>
                                    <p>760 N. Euclid St. #104 <br />Anaheim, CA 92801</p>
                                </div>
                                <div class="col-md-4">
                                    <h6>Ontario:</h6>
                                    <p>1035 S. Milliken Avenue #D<br />Ontario, CA 91761</p>
                                </div>
                                <div class="col-md-4">
                                    <h6>Hayward:</h6> 
                                    <p>24301 Southland Dr. #304 <br />Hayward, CA 94545</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="footer-bottom-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 d-none d-lg-block">
                        <ul>
                            <li><a href="javascript:void(0);">Staffing</a></li>
                            <li><a href="javascript:void(0);">Recruiting</a></li>
                            <li><a href="javascript:void(0);">Job Seekers</a></li>
                            <li><a href="javascript:void(0);">Services</a></li>
                            <li><a href="javascript:void(0);">Resources</a></li>
                            <li><a href="javascript:void(0);">About us</a></li>
                            <li><a href="javascript:void(0);">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5 copyright-block">
                        <p>© 2020 Beyond Financial Solutions Inc., All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
