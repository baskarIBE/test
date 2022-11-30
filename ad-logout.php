<?php
if(1){
    session_start();
    session_destroy();
    unset($_SESSION['ad_email']);
    header('location:ad-login.php');
    
}

?>