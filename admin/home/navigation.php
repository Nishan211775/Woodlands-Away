<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
?>

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
        
    </head>
    <body>
        <div class="main">
            <div class="logo">
                <a href="index.php"><strong style="font-size: 25px">Woodlands Away</strong></a>
            </div>
            
            <div class="list">
                <ul>
                    <li class="login"><a href="../account/account.php">Logout -- <?php 
                        if (isset($_SESSION['username'])) {
                            echo $_SESSION['username'];
                        }?>
                        </a></li>
                    <li class="help"><a href="price.php">Insert Price</a></li>
                    <li class="contact"><a href="notification.php">Notification</a></li>
                    <li class="home"><a href="index.php">Home</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
