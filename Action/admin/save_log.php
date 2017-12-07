<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['insert'])) {
    $log_type = $_POST['log_types'];
    $des = $_POST['description'];
    $price = $_POST['price'];
    //$photo_name = $_POST['photo_name'];
    
    $pname = $_FILES["photo_name"]["name"];
    $target_dir = "../../image/";
    $target_file = $target_dir . basename($_FILES["photo_name"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["insert"])) {
        $check = getimagesize($_FILES["photo_name"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photo_name"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["photo_name"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
    
    include_once '../../controller/Admin.php';
    
    $admin = new Admin();
    $res = $admin->saveLog($log_type, $des, $price, $pname);
    
    if ($res > 0) {
        ?>
<script>
    alert ("Saved");
    window.location = "../../admin/home/index.php";
</script>
            <?php
    } else {
        ?>
<script>
    alert ("Something went wrong");
    //window.location = "../../admin/home/index.php";
</script>
            <?php
    }
}