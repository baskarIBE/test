<?php
include ('config.php');
session_start();
//initializing variables
$firstname ="";
$lastname ="";
$email ="";
$mobileno ="";
$address1 ="";
$address2 ="";
$country ="";
$city ="";
$state ="";
$zipcode ="";
$password1 ="";
$password2 ="";
$errors = array();
//connect to the database


//register user
if(isset($_POST['reg_user'])){
    //resive all input values in the form
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobileno = mysqli_real_escape_string($db, $_POST['mobileno']);
    $address1 = mysqli_real_escape_string($db, $_POST['address1']);
    $address2 = mysqli_real_escape_string($db, $_POST['address2']);
    $country = mysqli_real_escape_string($db, $_POST['country']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $state = mysqli_real_escape_string($db, $_POST['state']);
    $zipcode = mysqli_real_escape_string($db, $_POST['zipcode']);
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);

    //formvalidation that the form is correctly filled...
    //by adding (array_push()) corresponding error into $errors array
    if (empty($firstname)){array_push($errors,"first name is required");}
    if (empty($lastname)){array_push($errors,"last name is required");}
    if (empty($email)){array_push($errors,"email is required");}
    if (empty($mobileno)){array_push($errors,"mobileno is required");}
    if (empty($address1)){array_push($errors,"address1 is required");}
    if (empty($address2)){array_push($errors,"address2 is required");}
    if (empty($country)){array_push($errors,"country is required");}
    if (empty($city)){array_push($errors,"city is required");}
    if (empty($state)){array_push($errors,"state is required");}
    if (empty($zipcode)){array_push($errors,"zipcode is required");}
    if (empty($password1)){array_push($errors,"password is required");}
    if ($password1 != $password2){
        array_push($errors,"the two password does not match");
    }


    //first check the database make sure
    //a user does not exit altready exit with the email/password
    $user_check_query = "select * from crackersuser where email='$email' or mobileno='$mobileno' LIMIT 1";
    $result = mysqli_query($db,$user_check_query);
    $user=mysqli_fetch_assoc($result);
    if($user){  //exit email
        if($user['email']===$email){
            array_push($errors,"email altready exites");
        }
        if($user['mobileno']===$mobileno){
            array_push($errors,"mobileno altready exites");
        }
    }
    //finaly there are no error in the form
    if(count($errors) == 0){
        $password = md5($password1);//eccript the password before saving in the database
        $query = "insert into crackersuser(firstname,lastname,email,mobileno,address1,address2,country,city,state,zipcode,password) values('$firstname','$lastname','$email','$mobileno','$address1','$address2','$country','$city','$state','$zipcode','$password')";
        mysqli_query($db,$query);
        $_SESSION['email']=$email;
        $_SESSION['success']="you are now logged in";
        //header('location: index.php');
        header('location: user.php');
    }
}
//login user
if(isset($_POST['login_user'])){
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if(empty($email)){
        array_push($errors,"email is required");
    }
    if(empty($password)){
        array_push($errors,"password is required");
    }
    if(count($errors)==0){
        $password = md5($password);
        $query = "select * from crackersuser where email='$email' AND password='$password'";
        $results = mysqli_query($db,$query);
        if(mysqli_num_rows($results)==1){
            $_SESSION['email']=$email;
            $_SESSION['success']="you are now logged in";
            header('location: index.php');
        }else{
            array_push($errors,"wrong email & password combination");
        }
    }
}

if(isset($_POST['ad-login'])){
    $ad_username = mysqli_real_escape_string($db, $_POST['ad_username']);
    $ad_email = mysqli_real_escape_string($db, $_POST['ad_email']);
    $ad_password = mysqli_real_escape_string($db, $_POST['ad_password']);
    if(empty($ad_username)){
        array_push($errors,"username is required");
    }
    if(empty($ad_email)){
        array_push($errors,"email is required");
    }
    if(empty($ad_password)){
        array_push($errors,"password is required");
    }
    if(count($errors)==0){
    $password = ($password);
    $query = "select * from crackersadmin where ad_username='$ad_username' AND ad_email='$ad_email' AND ad_password='$ad_password'";
    $result= mysqli_query($db,$query);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['ad_email']=$ad_email;
        header('location:admin.php');
    } 
    else{
        echo "<script>window.location.href='ad-login.php';</script>";
    }
        
    }
    
    

    
}

if(isset($_SESSION["cart"]))
    {
        $coucart=0;
        $coucart=count($_SESSION["cart"]);
    }




?>