<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include_once 'navigation.php';
include_once '../../controller/Users.php';

$user = new Users();
$all_lodge = $user->getAllLodge("Original");

foreach ($all_lodge as $value) {

?>
<div class="wrap">
    <div class="booking">
        <div class="photo">
            <img src="../../image/<?php echo $value[4] ?>">
        </div>
        <div class="detail">
            <?php echo $value[2] ?>
        </div>
    </div>
    
    <div class="button">
        <div class="cost">
            <label>COST = $<?php echo $value[3] ?></label>
        </div>
        
        <div class="book">
            <a href="booking.php?id=<?php echo $value[0] ?>"><input type="submit" name="book" value="BOOK NOW"></a>
        </div>
    </div>
    
</div>
<?php
}
?>