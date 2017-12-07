<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $book_id = 0;
    $user_id = 0;
    $booking_date = "";
    
    if (isset($_GET['id'])) {
        $book_id = $_GET['id'];
    }
    
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        //$user_id = 0;
        
    }
    
    include_once '../../controller/Users.php';
    $user = new Users();
    $image = $user->getLodgeImage($book_id);
    $cost = $user->getCost($book_id);
    $total_cost = $cost[0];
    $_SESSION['cost'] = $total_cost;
    
    if (isset($_POST['calculate'])) {
        $total_cost = 0;
        $date = $_POST['check_in'];
        $_SESSION['date'] = $date; 
        
        $package = $_POST['package'];
        
        $day = DateTime::createFromFormat("Y-m-d", $date);
        $value = $day->format("w");
        
        if ($value == 1) {
            ?>
<script>
    var r = confirm("Booking not available. We are closed on Monday.\nDo you want to view our shedule");
    
    if (r == true) {
        window.location = 'Calender.php';
    }
</script>
                <?php
        }
        
        
        if ($package == 4) {
            $total_cost = $cost[0]*4;
        } else if($package == 5) {
            $total_cost = $cost[0]*5;
        }
    }
    
    


    
    
    include_once '../home/navigation.php';
?>

<div style="width: 100%; height: 550px; margin-top: 150px; margin-left: auto; margin-right: auto;">
    <div class="image">
        <img src="../../image/<?php echo $image[0] ?>" />
    </div>
    
    <div class="month">
        <table width="100%" height="100%" border="0">
            <form method="post" action="">
                <tr>
                    <td><label>When you want to book ?</label></td>
                    <td><input name="calculate" type="submit" value="Calculate Cost"></td>
                </tr>
            
                <tr>
                    <td><label>Check In</label></td>
                    <td><input required="" name="check_in" type="date"></td>
                </tr>
                
                <tr>
                    <td><label>Select Package</label></td>
                    <td>
                        <select name="package">
                            <option selected value="4">Four month</option>
                            <option value="5">Five month</option>
                        </select>    `
                    </td>
                </tr>
                </form>        
                <tr>
                    <td>Total Cost = $<?php echo $total_cost; ?></td>
                <form method="post">
                    <td><input name="proceed" type="submit" value="Proceed"></td>
                </form>
                </tr>
                
        </table>
    </div>
</div>

<?php



if (isset($_POST['proceed'])) {
    if(!isset($_SESSION['user_id'])) {
        ?>
<script>
    var r = confirm("You must login to book this lodge.\nAre you sure want to login");
    if (r == true) {
        window.location = "../account/account.php";
    }
</script>
            <?php
    } else {
        include_once '../../controller/Users.php';
        $user = new Users();
        $book = $user->book($user_id, $book_id, $_SESSION['date'], $_SESSION['cost']);
        
        
        if ($book > 0) {
            ?>
                <script>
                    alert("Booked. \nYou will get email.");
                </script>
                <?php
        } else {
            
        }
        
    }
}