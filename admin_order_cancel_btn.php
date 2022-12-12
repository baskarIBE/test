<?php
include ('config.php');
session_start();
// print_r($_POST);
$ad_coi=$_POST["ad_coi"];
$ad_order_stus_date=date('Y-m-d');

if(isset($_POST['ad-cancelorder']))
{
    $adcanor = "UPDATE creakersorder SET ad_cancel_or_staus = 'Cancel order Completed',order_stus = 'Cancel',ad_cancel_or_staus_up_date='$ad_order_stus_date' WHERE order_id=$ad_coi";
    print_r($adcanor);
    $result = mysqli_query($db,$adcanor);
    echo "$result";
    header('location: admin.php');
}




?>