<?php
include ('config.php');
include ('order.php');
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
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
                <p class="m-0">Shop Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
        <div class="col-lg-8">
            

<?php


if(isset($_POST["addcart"])){
    if(isset($_SESSION["cart"]))
    {
        $pid_array=array_column($_SESSION["cart"],"crackers_id");
        if(!in_array($_GET["id"],$pid_array))
        {
            $index=count($_SESSION["cart"]);
            $item=array(
                'crackers_id' => $_GET["id"],
                'pname' => $_POST["pname"],
                'price' => $_POST["price"],
                'qty' => $_POST["qty"]
            );
            
            $_SESSION["cart"][$index]=$item;
                echo "<script>alert('Product Added..');</script>";
                echo"<script>window.location.href='checkout.php';</script>";
        }
        else
        {
            echo "<script>alert('Already Added..');</script>";
            echo"<script>window.location.href='cart.php';</script>";
        }
    }
    else
    {
            $item=array(
                'crackers_id' => $_GET['id'],
                'pname' => $_POST['pname'],
                'price' => $_POST['price'],
                'qty' => $_POST['qty']
            );
            $_SESSION["cart"][0]=$item;
            echo "<script>alert('Product Added..');</script>";
            echo"<script>window.location.href='checkout.php';</script>";
            
    }

   
}

if(isset($_GET["id"]))
{
    $sql="select * from crackerslist where crackers_id='{$_GET["id"]}'";
			$res=$db->query($sql);
			if($res->num_rows>0)
            {
            $row=$res->fetch_assoc();
            echo "
            <form class='row px-xl-5' action='{$_SERVER["REQUEST_URI"]}' method='post'>
                <div class='col-lg-5 pb-5'>
                    <div id='product-carousel' class='carousel slide' data-ride='carousel'>
                        <div class='carousel-inner border'>
                            <div class='carousel-item active'>
                                <img class='w-100 h-100' src='img/{$row["cracker_img"]}' alt='Image'>
                            </div>
                            <div class='carousel-item'>
                                <img class='w-100 h-100' src='img/{$row["cracker_img"]}' alt='Image'>
                            </div>
                            <div class='carousel-item'>
                                <img class='w-100 h-100' src='img/{$row["cracker_img"]}' alt='Image'>
                            </div>
                            <div class='carousel-item'>
                                <img class='w-100 h-100' src='img/{$row["cracker_img"]}' alt='Image'>
                            </div>
                        </div>
                        <a class='carousel-control-prev' href='#product-carousel' data-slide='prev'>
                            <i class='fa fa-2x fa-angle-left text-dark'></i>
                        </a>
                        <a class='carousel-control-next' href='#product-carousel' data-slide='next'>
                            <i class='fa fa-2x fa-angle-right text-dark'></i>
                        </a>
                    </div>
                </div>
                <div class='col-lg-7 pb-5'>
                    <h3 class='font-weight-semi-bold'>{$row["cracker_name"]}</h3>
                    <div class='d-flex mb-3'>
                        <div class='text-primary mr-2'>
                            <small class='fas fa-star'></small>
                            <small class='fas fa-star'></small>
                            <small class='fas fa-star'></small>
                            <small class='fas fa-star-half-alt'></small>
                            <small class='far fa-star'></small>
                        </div>
                        <small class='pt-1'>(50 Reviews)</small>
                    </div>
                    <h3 class='font-weight-semi-bold mb-4'>Rs.{$row["cracker_dc_price"]}</h3>
                    <p class='mb-4'>Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy. Accus labore stet, est lorem sit diam sea et justo, amet at lorem et eirmod ipsum diam et rebum kasd rebum.</p>
                    
                    <div class='d-flex align-items-center mb-4 pt-2'>
                        <div class='input-group quantity mr-3' style='width: 130px;'>

                            <input type='text' class='search-box bg-secondary text-center' name='qty' required>
                            <input type='hidden' class='search-box bg-secondary text-center' name='pname' value={$row["cracker_name"]}>
                            <input type='hidden' class='search-box bg-secondary text-center' name='price' value={$row["cracker_dc_price"]}>
                            
                        </div>
                        <button name='addcart' class='btn btn-primary px-3'><i class='fa fa-shopping-cart mr-1'></i> Add To Cart</button>
                    </div>
                    <div class='d-flex pt-2'>
                        <p class='text-dark font-weight-medium mb-0 mr-2'>Share on:</p>
                        <div class='d-inline-flex'>
                            <a class='text-dark px-2' href='javascript:void(0);'>
                                <i class='fab fa-facebook-f'></i>
                            </a>
                            <a class='text-dark px-2' href='javascript:void(0);'>
                                <i class='fab fa-twitter'></i>
                            </a>
                            <a class='text-dark px-2' href='javascript:void(0);'>
                                <i class='fab fa-linkedin-in'></i>
                            </a>
                            <a class='text-dark px-2' href='javascript:void(0);'>
                                <i class='fab fa-pinterest'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        
            <div class='col-lg-4'>
                <form class='mb-5'>
                    <div class='input-group'>
                        <input type='text' class='search-box p-4' placeholder='Coupon Code'>
                        <div class='input-group-append'>
                            <button class='btn btn-primary'>Apply Coupon</button>
                        </div>
                    </div>
                </form>
            <div class='card border-secondary mb-5'>
                <div class='card-header bg-secondary border-0'>
                    <h4 class='font-weight-semi-bold m-0'>Cart Summary</h4>
                </div>
                <div class='card-body'>
                    <div class='d-flex justify-content-between mb-3 pt-1'>
                        <h6 class='font-weight-medium'>Subtotal</h6>
                        <h6 class='font-weight-medium'>$150</h6>
                    </div>
                    <div class='d-flex justify-content-between'>
                        <h6 class='font-weight-medium'>Shipping</h6>
                        <h6 class='font-weight-medium'>$10</h6>
                    </div>
                </div>
                <div class='card-footer border-secondary bg-transparent'>
                    <div class='d-flex justify-content-between mt-2'>
                        <h5 class='font-weight-bold'>Total</h5>
                        <h5 class='font-weight-bold'>$160</h5>
                    </div>
                    <button id='chekid' name='addcart1' class='btn btn-block btn-primary my-3 py-3 idbut' onClick='reply_click(this.id)'>Proceed To Checkout</button>
                </div>
            </div>
        </div>
            
            
            ";
            }
            
}
else
{
    echo"<script>window.location.href='cart.php';</script>";
}




 ?>

            
        

</div>
        
    </div>
    <!-- Shop Detail End -->


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
         
    <?php include 'footer.php'; ?>