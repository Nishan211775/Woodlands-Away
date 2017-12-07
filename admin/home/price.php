<?php

include_once 'navigation.php';

?>
<div style="margin-top: 10px; width: 65%; margin-left: auto; margin-right: auto;">
    <form method="post" action="../../Action/admin/price.php">
        <table border="0" width="100%">
            <tr height="40">
                <td>Select Cabin type</td>
                <td>
                    <select name="cabin">
                        <option value="Luxury" selected>Luxury</option>
                        <option value="Contemporary">Contemporary</option>
                        <option value="Original">Original</option>                    
                    </select>
                </td>
            </tr>
			<tr height="40">
                <td><label>Enter price in pound(£)</label></td>
            </tr>
            <tr height="40">
                <td><label>January</label></td>
                <td><input type="number" name="jan" class="size" required></td>
            </tr>
            <tr height="40">
                <td><label>Fabruary</label></td>
                <td><input type="number" name="feb" class="size" required></td>
            </tr>
            <tr height="40">
                <td><label>March</label></td>
                <td><input type="number" name="mar" class="size" required></td>
            </tr height="40">
            <tr height="40">
                <td><label>April</label></td>
                <td><input type="number" name="apl" class="size" required></td>
            </tr>
            <tr height="40">
                <td><label>May</label></td>
                <td><input type="number" name="may" class="size" required></td>
            </tr>
            <tr height="40">
                <td><label>June</label></td>
                <td><input type="number" name="jun" class="size" required></td>
            </tr>
            <tr height="40">
                <td><label>July</label></td>
                <td><input type="number" name="jul" class="size" required></td>
            </tr>
            <tr height="40">
                <td><label>August</label></td>
                <td><input type="number" name="aug" class="size" required></td>
            </tr>
            <tr height="40">
                <td><label>September</label></td>
                <td><input type="number" name="sep" class="size" required></td>
            </tr
            <tr height="40">
                <td><label>October</label></td>
                <td><input type="number" name="oct" class="size" required></td>
            </tr>
            <tr height="40">
                <td><label>November</label></td>
                <td><input type="number" name="nov" class="size" required></td>
            </tr>
            <tr height="40">
                <td><label>December</label></td>
                <td><input type="number" name="dece" class="size" required></td>
            </tr>
            <tr height="40">
                <td></td>
                <td><input name="save" type="submit" value="SAVE"></td>
            </tr>
        </table>
    </form>
</div>
