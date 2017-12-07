<?php

include_once '../../controller/Admin.php';

if (isset($_POST['update'])) {
    $id = $_POST['log_id'];
    $date = $_POST['date'];
    $price = $_POST['price'];
    
    echo $id;
    echo $date;
    echo $price;
    
    $admin = new Admin();
    $update = $admin->updateBooking($date, $price);
    
    if ($update>0) {
        ?>
<script>
    alert("Booking updated");
    window.location="../../admin/home/notification.php";
</script>
            <?php
    } else {
        ?>
<script>
    alert("Something went wrong");
    window.location="../../admin/home/notification.php";
</script>

            <?php
    }
}