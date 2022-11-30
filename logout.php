<?php
if(1){
    session_start();
    session_destroy();
    unset($_SESSION['cart']);
    unset($_SESSION['email']);
    print_r($_SESSION);
    header('location:user.php');  
    

}


?>
