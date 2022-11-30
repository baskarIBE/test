<?php
include ('config.php');
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
                <form action="">
                    <div class="input-group">
                        <input type="text" class="search-box" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
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
                            <a href="user-history.php" class="nav-item nav-link">Order</a>
                            <a href="user.php" class="nav-item nav-link">Login</a>
                            <a href="register.php" class="nav-item nav-link">Register</a>
                            <a href="admin.php" class="nav-item nav-link" onClick="reply_click(this.id)" id="1">Admin</a>
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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Order Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!--page start-->
    <div class="row px-xl-5">
    <div class="col-lg-12 mt-0 mb-2 text-right">
        <a class="btn btn-primary" type="submit" name="checkout" href="logout.php">Logout</a>
        </div>
    <div class="col">
        <div class="nav nav-tabs justify-content-center border-secondary mb-4">
            <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Orders List</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Buy Again</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Not Yet Shipped</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-4">Cancelled Orders </a>
        </div>
        <!--tab 1-->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-pane-1">

            
            <!-- content start-->     
            <div class="col-lg-12 table-responsive mb-5">
            <table class="table table-bordered text-center mb-5">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>List of Product Name</th>
                            <th>List of Crackers qty</th>
                            <th>List of Crackers Total</th>
                            <th>List of Crackers Order Date</th>
                            <th>List of Crackers email</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    <?php
                    
                //    $sql="SELECT crackersuser.email,crackersuser.mobileno,creakersorder.order_name,creakersorder.order_qty,creakersorder.order_total,creakersorder.orderdate,creakersorder.cusemail from crackersuser inner join creakersorder on crackersuser.crackersuser_id=creakersorder.order_id";
                $sql="SELECT crackersuser.email,crackersuser.mobileno,creakersorder.order_name,creakersorder.order_qty,creakersorder.order_total,creakersorder.orderdate,creakersorder.cusemail from crackersuser inner join creakersorder on crackersuser.crackersuser_id=creakersorder.order_id";
                
                // $sql="SELECT * FROM creakersorder where cusemail='{$_SESSION['email']}'";
                   $res=$db->query($sql);
                   if($res->num_rows>0)
                   {
                       while($row=$res->fetch_assoc())
                       {
                           echo '
                       <tr>
                           <td>'. $row['order_name'] .'</td>
                           <td>'. $row['order_qty'] .'</td>
                           <td>'. $row['order_total'] .'</td>
                           <td>'. $row['orderdate'] .'</td>
                           <td>'. $row['cusemail'] .'</td>
                       </tr>

                       ';    
                   }
                }else{
                    echo"<script>window.location.href='user.php';</script>";
                }
                       ?>

                    </tbody>
                </table> 
                
            </div>
            <!-- content end-->
            </div>
        <!--end-->
            <div class="tab-pane fade" id="tab-pane-2">
                
                <div class="row">
                    <div class="col-md-12">
                       
                    <!-- content start-->     
            <div class="col-lg-12 table-responsive mb-5">
            <table id="example" class="table table-bordered text-center mb-5">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>List of Product Name</th>
                            <th>List of Crackers qty</th>
                            <th>List of Crackers Total</th>
                            <th>List of Crackers Order Date</th>
                            <th>List of Crackers email</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    <?php
                $sql="SELECT * FROM creakersorder where cusemail='{$_SESSION['email']}'";
                   $res=$db->query($sql);
                   if($res->num_rows>0)
                   {
                       while($row=$res->fetch_assoc())
                       {
                           echo '
                       <tr>
                           <td>'. $row['order_name'] .'</td>
                           <td>'. $row['order_qty'] .'</td>
                           <td>'. $row['order_total'] .'</td>
                           <td>'. $row['orderdate'] .'</td>
                           <td>'. $row['cusemail'] .'</td>
                       </tr>

                       ';   
                   }
                }else{
                    echo"<script>window.location.href='user.php';</script>";
                }
                       ?>
                    </tbody>
                </table> 
                
            </div>
            <!-- content end-->
                    
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-pane-3">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-4">Looking for an order? All of your orders have been dispatched.<a href="cart.php">View all orders</a></p>  
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-pane-4">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-4">Looking for an order? All of your orders have been dispatched.<a href="cart.php">View all orders</a></p>
                        
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
    <!--page end-->
    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="creaker-title2 px-5"><span class="px-2">You May Also Like</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel creaker2-carousel">
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">28 Giant</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="cart.php" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="cart.php" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">24 Deluxe Crackers</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="cart.php" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="cart.php" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Red Bijili(100 pcs)</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="cart.php" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="cart.php" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Flower Pots Small</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="cart.php" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="cart.php" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Flower Pots Big</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="cart.php" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="cart.php" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
<!-- Footer Start -->
<div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="index.php" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">C</span>rackers</h1>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consectetur a cum tenetur maxime?</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, UPDATE, SOON</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>updatesoon@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+099 876 54321</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-dark" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-dark" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="search-box border-0 py-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="search-box border-0 py-4" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="javascript:void(0);">Your Site Name</a>. All Rights Reserved. Designed
                    by
                    <a class="text-dark font-weight-semi-bold" href="javascript:void(0);">updatesoon</a><br>
                    Distributed By <a href="javascript:void(0);" target="_blank">updatesoon</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function () {
$('#example').DataTable();
});
</script>
    </body>

</html>