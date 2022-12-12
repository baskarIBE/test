<?php
include ('config.php');
session_start();

// print_r($_POST);
// print_r($_POST["userdif"]);
// print_r($_POST["poi"]);
// print_r($_POST["coi"]);
// print_r($_POST["cname"]);

// print_r($_POST["userdif"]);
// print_r($_POST["poi"]);
// print_r($_POST["coi"]);
// print_r($_POST["cname"]);
$poi=$_POST["poi"];
$coi=$_POST["coi"];
$cname=$_POST["cname"];
$userdif=$_POST["userdif"];
$order_stus_date=date('Y-m-d');


if(isset($_POST['return_query']))
{
    
    $canord = "insert into remorke_cancel(order_id,order_product_id,order_product_name,remorke_name) values($coi,$poi,'$cname','$userdif')";
    print_r($canord);
    $result = mysqli_query($db,$canord);
    echo "$result";
    header('location: user-history.php');
    $canord = "UPDATE creakersorder SET order_stus = 'Cancel Request',order_stus_date='$order_stus_date' WHERE order_id=$coi";
    print_r($canord);
    $result = mysqli_query($db,$canord);
    echo "$result";
}


?>