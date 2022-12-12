<?php 
include ('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crackers</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="css/owl.carousel.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="javascript:void(0);">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="javascript:void(0);">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="javascript:void(0);">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="javascript:void(0);">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="javascript:void(0);">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="javascript:void(0);">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="javascript:void(0);">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="javascript:void(0);">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="index.php" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">C</span>rackers</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
            <form action="search.php" method="get">
                    <div class="input-group">
                        <input type="text" class="search-box" id="search" placeholder="Search for products" name="keys">
                        <div id="display" class="ser-tex"></div>
                        <div class="input-group-append">
                            <button class="input-group-text bg-transparent text-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="checkout.php" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge-top"><?php if(isset($_SESSION["cart"])){echo "$coucart";}?></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden scro" style="height: 410px">
                        <a href="cart.php" class="nav-item nav-link">PRE-SELECTED PACKAGE</a>
                        <a href="cart.php" class="nav-item nav-link">ONE SOUND CRACKERS</a>
                        <a href="cart.php" class="nav-item nav-link">BIJILI CRACKERS</a>
                        <a href="cart.php" class="nav-item nav-link">CHORSA & DELUXE CRACKERS</a>
                        <a href="cart.php" class="nav-item nav-link">BOMB CRACKERS</a>
                        <a href="cart.php" class="nav-item nav-link">GROUND CHAKKARS</a>
                        <a href="cart.php" class="nav-item nav-link">FLOWER POTS</a>
                        <a href="cart.php" class="nav-item nav-link">COLOUR FOUNTAINS</a>
                        <a href="cart.php" class="nav-item nav-link">NOVELTIES AND CHILDREN ITEMS</a>
                        <a href="cart.php" class="nav-item nav-link">PENCIL'S</a>
                        <a href="cart.php" class="nav-item nav-link">COLOUR MATCHES</a>
                        <a href="cart.php" class="nav-item nav-link">TWINKLING STARS</a>
                        <a href="cart.php" class="nav-item nav-link">7 CM SPARKLERS</a>
                        <a href="cart.php" class="nav-item nav-link">10 CM SPARKLERS</a>
                        <a href="cart.php" class="nav-item nav-link">12 CM SPARKLERS</a>
                        <a href="cart.php" class="nav-item nav-link">15 CM SPARKLERS</a>
                        <a href="cart.php" class="nav-item nav-link">30 CM SPARKLERS</a>
                        <a href="cart.php" class="nav-item nav-link">50 CM SPARKLERS</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="index.php" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">C</span>rackers</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="cart.php" class="nav-item nav-link">Shop</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="user-history.php" class="nav-item nav-link" id="2" onClick="reply_click(this.id)">Order</a>
                            <a href="user.php" class="nav-item nav-link">Login</a>
                            <a href="register.php" class="nav-item nav-link">Register</a>
                            <a id="1" href="admin.php" class="nav-item nav-link" onClick="reply_click(this.id)">Admin</a>
                            <!-- <a id="1" href="ad-login.php" class="nav-item nav-link" onClick="reply_click(this.id)">Admin</a> -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Contact Us</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="creaker-title2 px-5"><span class="px-2">Contact For Any Queries</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate" method="get">
                        <div class="control-group">
                            <input type="text" class="search-box" id="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="search-box" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="search-box" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="search-box" rows="6" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" name="sendmail" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">Get In Touch</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consectetur a cum tenetur maxime? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Store 1</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, UPDATE, SOON</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>updatesoon@example.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+099 876 54321</p>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="font-weight-semi-bold mb-3">Store 2</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, UPDATE, SOON</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>updatesoon@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+099 876 54321</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php include 'footer.php'; ?>