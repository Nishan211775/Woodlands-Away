<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './navigation.php';
?>

<div style="margin-top: 15px; height:500px; width: 50%; margin-left: auto; margin-right: auto;">
    <form action="../../Action/admin/update_booking.php" method="post">
        <table border="0" style="width:100%;height:100%">
            <tr>
                <td>Update booking here</td>
                <td></td>
            </tr>
            <tr>
                <td>Log Id</td>
                <td><input type="number" name="log_id" value="<?php echo $_GET['id']; ?>" required></td>
            </tr>
            <tr>
                <td>Booking date</td>
                <td><input type="date" name="date" required></td>
            </tr>
            <tr>
                <td>Total Price</td>
                <td><input type="number" name="price" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="UPDATE" name="update"></td>
                <td><input type="submit" value="CANCEL"></td>
            </tr>
        </table>
    </form>
</div>