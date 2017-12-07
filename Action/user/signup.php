<?php
session_start();

if (isset($_POST['signup'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $post_code = $_POST['postcode'];
    $password = $_POST['password'];
    
    include_once '../../controller/Users.php';
    
    $user = new Users();
    $signup = $user->signup($first_name, $last_name, $email, $gender, $address, $post_code, $password);
    
    if ($signup > 0) {
        $_SESSION['first_name'] = $first_name;
        header('location: ../../admin/home/index.php');
    } else {
        echo "Failed";
    }
}

