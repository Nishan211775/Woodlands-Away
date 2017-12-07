<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['login'])) {
    
    include_once '../../controller/Admin.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $admin = new Admin();
    $login = $admin->login($username, $password);
    
    if ($login) {
        $_SESSION['username'] = $username;
        header('location: ../../admin/home/index.php');
    } else {
        ?>
<script>
    alert('either username or password is wrong');
</script>
            <?php
    }
} 