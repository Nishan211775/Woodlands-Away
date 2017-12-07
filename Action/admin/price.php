<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['save'])) {
    $type = $_POST['cabin'];
    $jan = $_POST['jan'];
    $feb  = $_POST['feb'];
    $mar  = $_POST['mar'];
    $apl  = $_POST['apl'];
    $may  = $_POST['may'];
    $jun  = $_POST['jun'];
    $jul  = $_POST['jul'];
    $aug  = $_POST['aug'];
    $sep  = $_POST['sep'];
    $oct  = $_POST['oct'];
    $nov  = $_POST['nov'];
    $dece  = $_POST['dece'];
    
    include_once '../../controller/Admin.php';
    $admin = new Admin();
    $no = $admin->savePrice($type, $jan, $feb, $mar, $apl, $may, $jun, $jul, $aug, $sep, $oct, $nov, $dece);
    
    if ($no > 0) {
        ?>
<script>
    alert("Price Saved");
    window.location = "../../admin/home/price.php";
</script>
</script>
            <?php
    } else {
        ?>
<script>
    alert("Something went wrong");
    window.location = "../../admin/home/price.php";
</script>
</script>
            <?php
    }
}
