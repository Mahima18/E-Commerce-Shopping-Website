<?php
     $con = mysqli_connect("localhost:3308","root","1234","store") 
     or die(mysqli_error($con));
     session_start(); 

    $email = $_POST['email'];
    //$email = mysqli_real_escape_string($con , $email);

    $password = $_POST['password'];
    //$password = mysqli_real_escape_string($con , $password);

    $query = "SELECT id, email FROM users WHERE email = '$email' && password = '$password'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $number_of_users = mysqli_num_rows($result);

    if($number_of_users != 0){
        $row = mysqli_fetch_array($result);
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $row[0];
        header('location:home.php');
    } else {
        $error = "<span class='red'></span>";
        header("location:error.php?m1=".$error);
    }
?>
