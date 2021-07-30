<?php
require 'includes/common.php';

if(!isset($_SESSION['id'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>

<html>
    <head>
        <?php require 'includes/links.php'; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <title>Electronic Gadgets</title>
        <style>
            p{
                font-size: 16px;
            }
        </style>
    </head>
    <body style="margin-top: 40px;">
        <div class="header">
            <?php 
            include 'includes/header.php';
            include 'includes/check_if_added.php';
            ?>
        </div>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h6>iPhone Xs</h6>
                        </div>
                        <div class="panel-body">
                            <img src="img/iphonex.jpg" class="items">
                            <h3 align="center">Gold iPhone Xs</h3>
                            <h4>Specifications:-</h4>
                            <p><span class="specs">Brand: </span>Apple</p>
                            <p><span class="specs">Operating system: </span>iOS</p>
                            <p><span class="specs">Screen size: </span>5.8 inches screen</p>
                            <p><span class="specs">Front Camera Resolution: </span>7MP</p>
                            <p><span class="specs">Rear Camera Resolution: </span>12MP + 12MP</p>
                            <p><span class="specs">RAM: </span>3 GB</p>
                            <p><span class="specs">Storage: </span>256 GB</p>
                            <h4>Price: <del class="del_price">1,02,000</del><span class="price"> 95,000 INR</span></h4>
                            <p class="saving">You Will Save 7000 Rupees on this Purchase!</p>
                            <?php
                                if(check_if_added_to_cart(1)){?>
                            <a href="#" class="btn btn-success btn-block" disabled>Added to Cart</a>
                                <?php }
                                else{ ?>
                            <a href="cart_add.php?id=1" class="btn btn-primary btn-block">Add to Cart</a>
                                <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h6>Motorola Moto Z3</h6>
                        </div>
                        <div class="panel-body">
                            <img src="img/motoz.jpg" class="items">
                            <h3 align="center">Motorola Moto Z3</h3>
                            <h4>Specifications:-</h4>
                            <p><span class="specs">Brand: </span>Motorola</p>
                            <p><span class="specs">Operating system: </span>Android 8.1, oreo</p>
                            <p><span class="specs">Screen size: </span>6.01 inches screen</p>
                            <p><span class="specs">Front Camera Resolution: </span>8 MP</p>
                            <p><span class="specs">Rear Camera Resolution: </span>12 MP</p>
                            <p><span class="specs">RAM: </span>4 GB</p>
                            <p><span class="specs">Storage: </span>64 GB</p>
                            <h4>Price: <del class="del_price">33,300</del><span class="price"> 28,600 INR</span></h4>
                            <p class="saving">You Will Save 4700 Rupees on this Purchase!</p>
                            <?php
                                if(check_if_added_to_cart(2)){?>
                            <a href="#" class="btn btn-success btn-block" disabled>Added to Cart</a>
                                <?php }
                                else{ ?>
                            <a href="cart_add.php?id=2" class="btn btn-primary btn-block">Add to Cart</a>
                                <?php }
                             ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h6>Samsung Galxy A20</h6>
                        </div>
                        <div class="panel-body">
                            <img src="img/samsung.jpg" class="items">
                            <h3 align="center">Samsung Galaxy A20</h3>
                            <h4>Specifications:-</h4>
                            <p><span class="specs">Brand: </span>Samsung</p>
                            <p><span class="specs">Operating system: </span>Android</p>
                            <p><span class="specs">Screen size: </span>6.4 inches screen</p>
                            <p><span class="specs">Front Camera Resolution: </span>8 MP</p>
                            <p><span class="specs">Rear Camera Resolution: </span>18 MP</p>
                            <p><span class="specs">RAM: </span>4 GB</p>
                            <p><span class="specs">Storage: </span>64 GB</p>
                            <h4>Price: <del class="del_price">16,000</del><span class="price"> 14,500 INR</span></h4>
                            <p class="saving">You Will Save 1500 Rupees on this Purchase!</p>
                            <?php
                                if(check_if_added_to_cart(3)){?>
                            <a href="#" class="btn btn-success btn-block" disabled>Added to Cart</a>
                                <?php }
                                else{ ?>
                            <a href="cart_add.php?id=3" class="btn btn-primary btn-block">Add to Cart</a>
                                <?php }
                            ?>
                        </div>
                    </div>
                </div>
            </div>              
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h6>MacBook Air(2020)</h6>
                        </div>
                        <div class="panel-body">
                            <img src="img/ipad-pro-2020.jpg" class="items">
                            <h3 align="center">MacBook Air 2020</h3>
                            <h4>Specifications:-</h4>
                            <p><span class="specs">Brand: </span>Apple</p>
                            <p><span class="specs">Operating system: </span>macOS</p>
                            <p><span class="specs">Screen size: </span>13.30 inches screen</p>
                            <p><span class="specs">Processor: </span>Core i3</p>
                            <p><span class="specs">Weight: </span>1.29 kg</p>
                            <p><span class="specs">RAM: </span>8 GB</p>
                            <p><span class="specs">SSD: </span>256 GB</p>
                            <h4>Price: <del class="del_price">92,990</del><span class="price"> 86,900 INR</span></h4>
                            <p class="saving">You Will Save 6090 Rupees on this Purchase!</p>
                            <?php
                                if(check_if_added_to_cart(4)){?>
                            <a href="#" class="btn btn-success btn-block" disabled>Added to Cart</a>
                                <?php }
                                else{ ?>
                            <a href="cart_add.php?id=4" class="btn btn-primary btn-block">Add to Cart</a>
                                <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h6>HP Spectre x360</h6>
                        </div>
                        <div class="panel-body">
                            <img src="img/hp_laptop.jpg" class="items">
                            <h3 align="center">HP Spectre x360 LTE Laptop</h3>
                            <h4>Specifications:-</h4>
                            <p><span class="specs">Brand: </span>HP</p>
                            <p><span class="specs">Operating system: </span>Windows 10 Home 64</p>
                            <p><span class="specs">Screen size: </span>13.3 inches screen</p>
                            <p><span class="specs">Processor: </span>Intel Core i5</p>
                            <p><span class="specs">Weight: </span>1.26 kg</p>
                            <p><span class="specs">RAM: </span>8 GB</p>
                            <p><span class="specs">SSd: </span>256 GB</p>
                            <h4>Price: <del class="del_price">1,41,500</del><span class="price"> 1,30,000 INR</span></h4>
                            <p class="saving">You Will Save 11,500 Rupees on this Purchase!</p>
                            <?php
                                if(check_if_added_to_cart(5)){?>
                            <a href="#" class="btn btn-success btn-block" disabled>Added to Cart</a>
                                <?php }
                                else{ ?>
                            <a href="cart_add.php?id=5" class="btn btn-primary btn-block">Add to Cart</a>
                                <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h6>DELL Inspiron</h6>
                        </div>
                        <div class="panel-body">
                            <img src="img/dell_laptop.jpg" class="items">
                            <h3 align="center">DELL Inspiron 15 5590 Laptop</h3>
                            <h4>Specifications:-</h4>
                            <p><span class="specs">Brand: </span>DELL</p>
                            <p><span class="specs">Operating system: </span>Windows 10 Home</p>
                            <p><span class="specs">Screen size: </span>15.60 inches screen</p>
                            <p><span class="specs">Processor: </span>Intel Core i5</p>
                            <p><span class="specs">Weight: </span>1.64 kg</p>
                            <p><span class="specs">RAM: </span>8 GB</p>
                            <p><span class="specs">Storage: </span>512 GB</p>
                            <h4>Price: <del class="del_price">70,990</del><span class="price"> 61,490 INR</span></h4>
                            <p class="saving">You Will Save 9500 Rupees on this Purchase!</p>
                            <?php
                                if(check_if_added_to_cart(6)){?>
                            <a href="#" class="btn btn-success btn-block" disabled>Added to Cart</a>
                                <?php }
                                else{ ?>
                            <a href="cart_add.php?id=6" class="btn btn-primary btn-block">Add to Cart</a>
                                <?php }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h6>Apple Watch</h6>
                        </div>
                        <div class="panel-body">
                            <img src="img/apple_watch.jpg" class="img-responsive items">
                            <h3 align="center">Apple Watch Series 5</h3>
                            <h4>Specifications:-</h4>
                            <p><span class="specs">Brand: </span>Apple</p>
                            <p><span class="specs">Operating system: </span>watchOS 6.0</p>
                            <p><span class="specs">Screen size: </span>1.78 inches</p>
                            <p><span class="specs">Sensors: </span>Accelerometer, gyro, heart rate(2nd gen),barometer,compass</p>
                            <p><span class="specs">Weight: </span>47.8 gram</p>
                            <p><span class="specs">RAM: </span>1 GB</p>
                            <p><span class="specs">Storage: </span>32 GB</p>
                            <p><span class="specs">Camera: </span>NO</p>
                            <h4>Price: <del class="del_price">52,900</del><span class="price"> 49,900 INR</span></h4>
                            <p class="saving">You Will Save 3000 Rupees on this Purchase!</p>
                            <?php
                                if(check_if_added_to_cart(7)){?>
                            <a href="#" class="btn btn-success btn-block" disabled>Added to Cart</a>
                                <?php }
                                else{ ?>
                            <a href="cart_add.php?id=7" class="btn btn-primary btn-block">Add to Cart</a>
                                <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h6>Samsung Watch</h6>
                        </div>
                        <div class="panel-body">
                            <img src="img/samsung_watch.jpg" class="img-responsive items">
                            <h3 align="center">Samsung Galaxy Watch Active 2</h3>
                            <h4>Specifications:-</h4>
                            <p><span class="specs">Brand: </span>Samsung</p>
                            <p><span class="specs">Operating system: </span>Tizen-based wearable OS 4.0</p>
                            <p><span class="specs">Screen size: </span>1.4 inches </p>
                            <p><span class="specs">Sensors: </span>Accelerometer,gyro,heart rate, barometer</p>
                            <p><span class="specs">Weight: </span>42 gram</p>
                            <p><span class="specs">RAM: </span>1.5 GB</p>
                            <p><span class="specs">Storage: </span>4 GB</p>
                            <p><span class="specs">Camera: </span>NO</p>
                            <h4>Price: <del class="del_price">25,990</del><span class="price"> 24,990 INR</span></h4>
                            <p class="saving">You Will Save 1000 Rupees on this Purchase!</p>
                            <?php
                                if(check_if_added_to_cart(8)){?>
                            <a href="#" class="btn btn-success btn-block" disabled>Added to Cart</a>
                                <?php }
                                else{ ?>
                            <a href="cart_add.php?id=8" class="btn btn-primary btn-block">Add to Cart</a>
                                <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h6>Skagen Watch</h6>
                        </div>
                        <div class="panel-body">
                            <img src="img/skalgen_watch.jpg" class="img-responsive items">
                            <h3 align="center">Skagen Falster 3</h3>
                            <h4>Specifications:-</h4>
                            <p><span class="specs">Brand: </span>Skagen</p>
                            <p><span class="specs">Operating system: </span>Android v6.0</p>
                            <p><span class="specs">Screen size: </span>1.3 inches</p>
                            <p><span class="specs">Sensors: </span>Accelerometer,Light,A-GPS, Gloness,Sleep Quality</p>
                            <p><span class="specs">Weight: </span>64 gram</p>
                            <p><span class="specs">RAM: </span>1 GB</p>
                            <p><span class="specs">Storage: </span>8 GB</p>
                            <p><span class="specs">Camera: </span>NO</p>
                            <h4>Price: <del class="del_price">21,995</del><span class="price"> 19,995 INR</span></h4>
                            <p class="saving">You Will Save 2000 Rupees on this Purchase!</p>
                            <?php
                                if(check_if_added_to_cart(9)){?>
                            <a href="#" class="btn btn-success btn-block" disabled>Added to Cart</a>
                                <?php }
                                else{ ?>
                            <a href="cart_add.php?id=9" class="btn btn-primary btn-block">Add to Cart</a>
                                <?php }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
    </body>
</html>

