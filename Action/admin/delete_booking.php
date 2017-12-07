<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id = $_GET['id'];
include_once '../../controller/Admin.php';

$admin = new Admin();
$delete = $admin->deleteBooking($id);

if ($delete>0) {
    header("location: ../../admin/home/index.php");
} else {
    echo "failed";
}