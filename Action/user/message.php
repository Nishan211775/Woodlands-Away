<?php

session_start();
include_once '../../controller/Users.php';

$user_id = $_SESSION['user_id'];

if (isset($_POST['send'])) {
    $message = $_POST['message'];
    
    $user = new Users();
    $send = $user->sendMessage($user_id, $message);
    
    header("location: ../../Views/home/community.php");
}