<?php

include_once 'navigation.php';
include_once '../../controller/Admin.php';
include_once '../../controller/Users.php';

$admin = new Admin();
$booking = $admin->showBooking();
$user = new Users();

?>

<div style="width: 80%; margin-top: 10px; margin-left: auto; margin-right: auto;">
    <div style="width:50%; margin-left:auto; margin-right: auto">
        
            <?php 
            foreach($booking as $value) {
                $name = $user->getUserName($value[1]);
                $lodge_type = $admin->getLodgeType($value[2])
                ?>
            <label style="font-size: 25px;"><?php echo $name[0] ?> has booked <?php echo $lodge_type[0] ?> Lodge at Price $<?php echo $value[4] ?></label><br />
            <label style="font-size: 25px;">Date: <?php echo $value[3]; ?></label><br />
            <form method="post" action="../../Action/admin/accept_booking.php?id=<?php echo $value[0] ?>">
                <input style="width: 350px; height: 35px; margin-top: 10px;" type="submit" value="accept" name="accept">
            </form>
            <form method="post" action="../../Action/admin/delete_booking.php?id=<?php echo $value[0] ?>">
                <input style="width: 350px; height: 35px; margin-top: 10px;" type="submit" value="decline" name="decline">
            </a>
            </form>
            <form method="post" action="update.php?id=<?php echo $value[0] ?>">
                <input style="width: 350px; height: 35px; margin-top: 10px;" type="submit" value="update" name="update"></a>
            <hr />        
            </form>
                    <?php
            }
            ?>
            
    </div>
</div>