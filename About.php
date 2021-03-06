
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!-- Required meta tags -->


    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Flora Lands - Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons 
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">-->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/media.css" rel="stylesheet">
</head>

<body style="background-image: url(img/bg-1.jpg);background-size: cover;">
    <?php
    include("php/database.php");
    ?>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="Home.html">Flora Lands</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="Home.html">Home</a></li>
                    <li><a class="nav-link scrollto" href="About.html">About</a></li>
                    <li><a class="nav-link scrollto" href="Shop-Now.html">Shop Now</a></li>
                    <li><a class="nav-link scrollto" href="Blog.html">Blog</a></li>
                    <li><a class="nav-link scrollto" href="Gallery.html">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="" data-bs-toggle="modal"
                            data-bs-target="#contact-message">Contact</a>
                        <!-- Modal -->
                        <div class="modal fade" id="contact-message" tabindex="-1" aria-labelledby="login-modal"
                            aria-hidden="true">
                            <div class="modal-dialog">

                                <div class=" modal-content modal-message">
                                    <div class="modal-body">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="login-modal">WE HEAR ALL YOUR QUESTIONS / YOUR
                                                FEEDBACKS</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control " id="message-email"
                                                placeholder="Your Email">

                                            <input type="text" class="form-control " id="message-name"
                                                placeholder="Your Name">
                                            <textarea class="form-control " id="message-message"
                                                placeholder="Your Message"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="" class="credentials">Send Message</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </li>

                    <li class="dropdown"><a href="#" class="active"><span>My Account</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="Profile.html">Profile</a></li>
                            <li><a href="Orders.html">Orders</a></li>
                            <li><a href="Wishlist.html">Wishlist</a></li>
                            <li><a href="Cart.html">Cart</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </li>

                    <li>
                        <div class="d-flex credentials-div">
                            <a href="#book-a-table" class="credentials" data-bs-toggle="modal"
                                data-bs-target="#signup">SignUp</a>
                            <!-- Modal -->
                            <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="signup-modal"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="database.php" method="POST">
                                            <div class="modal-body">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="signup-modal">SIGNUP</h3>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control "
                                                        placeholder="Your Name" name="name" required>
                                                    <input type="email" class="form-control " 
                                                        placeholder="Your Email" name="email" required>
                                                    <input type="text" class="form-control " 
                                                        placeholder="Your Mobile No" name="mobile_no" required>
                                                    <input type="password" class="form-control " 
                                                        placeholder="Password" name="password" required>
                                                    <input type="password" class="form-control " i
                                                        placeholder="Confirm Password" name="conf_password" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" name="Submit" id="Submit" value="Sign up" class="credentials">                                                    

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="credentials" data-bs-toggle="modal" data-bs-target="#login">LOGIN</a>
                            <!-- Modal -->
                            <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login-modal"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="login-modal">Login</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="mb-3">
                                                <input type="email" class="form-control " id="login-email"
                                                    placeholder="Your Email">

                                                <input type="password" class="form-control " id="login-password"
                                                    placeholder="Password">
                                            </div>
                                            <div class="modal-footer">
                                                <a href="#book-a-table" class="credentials" data-bs-toggle="modal"
                                                    data-bs-target="#signup">Login</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>


                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->



        </div>
    </header><!-- End Header -->

    <!-- ======= main ======= -->
    <main id="main">

        <!-- ======= subscribe section ======= -->
        <section id="subscribe">
            <div class="rounded-3">
                <div class="container-fluid py-5 text-center text-white">
                    <h1 class="display-5 fw-bold ">Flora Lands</h1>
                    <p class="">We specialize in blablabla</p>
                </div>
                <div class="d-flex flex-row-reverse">
                    <input type="text" class="form-control" placeholder="Email">
                    <a class="btn"> Subscribe </a>
                </div>
            </div>
        </section><!-- End Subscribe Section -->

        <!-- ======= about section ======= -->
        <section id="about">
            <div class="d-flex">
                <div class="mission">
                    <h2>About Company Page</h2><br>
                    <p>Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut
                        aliquip ex ea commodo consequat.</p><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut
                        aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui
                        officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                </div>
                <div>
                    <img src="img/specials-5.jpg" class="about-image">
                </div>
            </div>
        </section><!-- End about Section -->

        <!-- ======= values section ======= -->
        <section id="values">
            <div class="d-flex">
                <div>
                    <img src="img/spill-3.jpg" class="about-image">
                </div>
                <div class="mission">
                    <h2>Our Values</h2><br>
                    <p><strong>Mission: </strong> ipsum dolor sit amet, consectetur
                        adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut
                        aliquip ex ea commodo consequat.</p><br>
                    <p><strong>Vision: </strong> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut
                        aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui
                        officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                </div>
            </div>
        </section><!-- End values Section -->

        <!-- ======= values section ======= -->
        <section id="services">
            <div class="container-fluid text-center ">
                <h2>SERVICES</h2>
                <h4 style="font-size: 1.1em; font-weight: normal; ">What we offer</h4>
                <br>
                <div class="row slideanim">
                    <div class="col-sm-4">
                        <img src="img/icons/watering.png" style="height: 50px; width: 50px;" class="mx-5 my-3">
                        <h4>POWER</h4>
                        <p>Lorem ipsum dolor sit amet..</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/icons/watering.png" style="height: 50px; width: 50px;" class="mx-5 my-3">
                        <h4>LOVE</h4>
                        <p>Lorem ipsum dolor sit amet..</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/icons/watering.png" style="height: 50px; width: 50px;" class="mx-5 my-3">
                        <h4>JOB DONE</h4>
                        <p>Lorem ipsum dolor sit amet..</p>
                    </div>
                </div>
                <br><br>
                <div class="row slideanim">
                    <div class="col-sm-4">
                        <img src="img/icons/watering.png" style="height: 50px; width: 50px;" class="mx-5 my-3">
                        <h4>GREEN</h4>
                        <p>Lorem ipsum dolor sit amet..</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/icons/watering.png" style="height: 50px; width: 50px;" class="mx-5 my-3">
                        <h4>CERTIFIED</h4>
                        <p>Lorem ipsum dolor sit amet..</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/icons/watering.png" style="height: 50px; width: 50px;" class="mx-5 my-3">
                        <h4 style="color:#303030;">HARD WORK</h4>
                        <p>Lorem ipsum dolor sit amet..</p>
                    </div>
                </div>
            </div>
        </section><!-- End values Section -->

    </main><!-- End Main -->

    <!-- ======= why flora section ======= -->
    <div class="d-flex why-flora flex-column justify-content-between">
        <h2>Why Flora Lands Plants?</h2>
        <p>All the plant gossip, through the grapevine. Pun intended</p>
        <div class="d-flex justify-content-between why-flora-div flex-wrap">
            <div>
                <img src="img/icons/packaging.png">
                <h5 class="why-flora-text">Safe Packaging and Guaranteed Quick Delivery</h5>
            </div>
            <div>
                <img src="img/icons/guidance.png">
                <h5 class="why-flora-text">Guidance from Gardening Experts and Hand-holding</h5>
            </div>
            <div>
                <img src="img/icons/replacement.png">
                <h5 class="why-flora-text">Assured Replacement In-case of Transit Damage</h5>
            </div>
            <div>
                <img src="img/icons/home-grown.png">
                <h5 class="why-flora-text">Home Grown Plants Curated Just For You</h5>
            </div>
        </div>
    </div>
    <!-- End why flora section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Flora Lands</h3>
                            <p>
                                Jodhpur USA<br><br>
                                <strong>Phone:</strong> +91 7597999578<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Lorem</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Lorem</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Lorem</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Lorem</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Lorem</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="footer-container">
            <div class="copyright">
                &copy; Copyright <strong><span>Flora Lands</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Created by <a href="">aptale.designs@gmail.com</a>
            </div>
        </div>
    </footer><!-- End Footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>
    <script src="js/flora.js"></script>


</body>

</html>

