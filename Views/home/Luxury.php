<?php

session_start();
include_once 'navigation.php';
include_once '../../controller/Users.php';

$user = new Users();
$all_lodge = $user->getAllLodge("Luxury");

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