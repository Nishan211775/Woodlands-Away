<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/
//session_start();

include_once 'navigation.php';
?>

<form action="../../Action/admin/save_log.php" method="post" enctype="multipart/form-data">
    <div style="">
        <div class="info">
            <label>Please provide detail information</label>
        </div>

        <div class="details">

            <div class="type">
                <div class="title">
                    <label for="title">Please select types of log cabin</label>
                </div>
                <div class="combo" name='log_type'>
                    <select name='log_types'>
                        <option value="Luxury" selected>Luxury</option>
                        <option value="Contempory">Contempory</option>
                        <option value="Original">Original</option>
                    </select>
                </div>
            </div>

            <div class="description">
                <div class="des">
                    <label>Provide your log's description</label>
                </div>

                <div class="destype">
                    <textarea name="description" rows="10" cols="50" required></textarea>
                </div>
            </div>

            <div class="price">
                <div class="plabel">
                    <label>Price</label>
                </div>

                <div class="pinput">
                    <input name="price" type="number" required>
                </div>
            </div>

            <div class="photo">
                <div class="phlabel">
                    <label>Please select photo</label>
                </div>

                <div class="phinput">
                    <input name="photo_name" type="file" required>
                </div>
            </div>

            <div class="buttons">
                <input name="insert" type="submit" value="INSERT">
            </div>
        </div>
    </div>
</form>






