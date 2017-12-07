<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

include_once './navigation.php';

if (!isset($_SESSION['user_id'])) {
    ?>
<script>
    alert("You must login to access this page");
    window.location = "home.php";
</script>
        <?php
}

?>

<div style="margin-top: 150px; width: 100%; height: 550px;">
    <div style="float: left; width: 40%; height: 100%;">
        <div style="">
            <label style="font-size: 30px;">Enter message here</label><br>
        </div>
        
        <div style="">
            <form action="../../Action/user/message.php" method="post">
                <textarea rows="20" cols="60" name="message" required></textarea><br />
                <input style="background: blue; color: white; width: 200px; height: 40px;" type="submit" name="send" value="SEND">
            </form>
        </div>
    </div>
    
    <div style="float: right; width: 55%; height: 100%">
        <table>
            
            <?php include_once '../../controller/Users.php'; 
                $user = new Users();
                $message = $user->getMessage();
                
                foreach ($message as $value) {
                    
                    ?>
                        
                        <tr>
                            <td style="font-size: 25px">
                                <?php echo "<b>".$user->getUserName($value[1])[0].":::  </b>".$value[2]; ?>
                            </td>
                        </tr>
                        
                        <?php
                }
            ?>
            
            
            
        </table>
    </div>
</div>