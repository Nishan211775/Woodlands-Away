<?php


session_start();

if(isset($_POST['login'])) {
    
    include_once '../../controller/Users.php';
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user = new Users();
    $login = $user->login($email, $password);
    $user_id = $user->getUsersID($email, $password);
    
    if ($login) {
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $user_id[0];
        header('location: ../../Views/home/home.php');
    } else {
        ?>
<script>
    alert('either username or password is wrong');
    window.location = "../../Views/accounts/account.php";
</script>
            <?php
    }
} 

