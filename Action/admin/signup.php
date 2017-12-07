<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
echo $username;
    if (empty($username) or empty($password)) {
    ?>
    
<script>
    alert("Please fill up form proprerly");
    window.location('../../admin/account/account.php');
</script>

    <?php
    
    
    } else {
    
        include_once '../../controller/Admin.php';
    
        $admin = new Admin();
        $signup = $admin->signup($username, $password);
    
        if ($signup > 0) {
            $_SESSION['username'] = $username;
            header('location: ../../admin/home/index.php');
        } else {
            echo "Failed";
        }
    }

}