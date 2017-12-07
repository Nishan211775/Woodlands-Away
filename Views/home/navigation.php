<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Woodlands Away</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            .main {
                background: black;
                color: white;
                width: 100%;
                height: 75px;
                margin-bottom: -135px;
                border: 2px solid red;
            }
            
            .logo {
                width: 45%;
                float: left;
                margin-left: 20px;
                height: 49px;
                padding-top: 22px;
            }
            
            .list {
                width: 45%;
                float: right;
                margin-right: 20px;
                height: 94%;
            }
            
            a {
                text-decoration: none;
                color: white;
            }
            
            .list ul li {
                list-style: none;
                display: block;
                float: right;
                height: 25px;
                padding-top: 10px;
                margin-right: 20px;
                text-align: center;
            }
            
        </style>
        <link rel="stylesheet" type="text/css" href="../../css/home.css">
        <link rel="stylesheet" type="text/css" href="../../css/luxury.css">
        <link rel="stylesheet" type="text/css" href="../../css/calender.css">
        <link rel="stylesheet" type="text/css" href="../../css/booking.css">
    </head>
    <body>
        <div class="main">
            <div class="logo">
                <a href="home.php"><strong style="font-size: 25px">Woodlands Away</strong></a>
            </div>
            
            <div class="list">
                <ul>
                    <li class="login"><a href="../accounts/account.php">Logout</a></li>
                    <li class="help"><a href="Luxury.php">Luxury</a></li>
                    <li class="contact"><a href="Contemporary.php">Contemporary</a></li>
                    <li class="about"><a href="Original.php">Original</a></li>
                    <li class="view"><a href="Calender.php">View Calender</a></li>
                    <li class="com"><a href="community.php">Community</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
