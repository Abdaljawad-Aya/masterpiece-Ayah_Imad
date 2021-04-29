<?php
//  include 'sendemail.php'
 ?>
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Gym Template">
        <meta name="keywords" content="Gym, unica, creative, html , vein">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sport In Vein </title>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js">
        </script>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/flaticon.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/barfiller.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">

        <!-- Latest compiled and minified CSS
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  Optional theme
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

        <!-- <script type="text/javascript">
  jQuery(document).ready(function() {

  });
  </script> -->

        <style>
        /* register */

        .header {
            width: 30%;
            margin: 50px auto 0px;
            background: #f46101;
            text-align: center;
            padding: 20px;
        }

        .header,
        h2 {
            color: white;
        }

        .form,
        .content {
            width: 30%;
            margin: 0px auto;
            padding: 20px;
            border: 1px solid #B0C4DE;
            background: white;
            font-family: 'Oswald', sans-serif;
            


        }

        .input-group {
            margin: 10px 0px 10px 0px;
        }

        .input-group label {
            display: block;
            text-align: left;
            margin: 3px;
        }

        .input-group input {
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        .btn {
            padding: 10px;
            font-size: 15px;
            color: white;
            background: #f46101;
            border: none;
            font-family: 'Oswald', sans-serif;
        }

        .errors {
            width: 92%;
            margin: 0px auto;
            padding: 10px;
            border: 1px solid #a94442;
            color: #a94442;
            background: #f2dede;
            border-radius: 5px;
            text-align: left;
        }

        .success {
            /* color: #3c763d; */
            background: #dff0d8;
            margin-bottom: 20px;
        }

        /* login */
        .btnlogin{
            padding: 10px;
            font-size: 15px;
            color: white;
            background: #f46101;
            border: none;
            font-family: 'Oswald', sans-serif;
        }

        .formlogin,
        .content {
            width: 30%;
            margin: 0px auto;
            padding: 20px;
            border: 1px solid #B0C4DE;
            background: white;
            font-family: 'Oswald', sans-serif;


        }

        .input-group label {
            display: block;
            text-align: left;
            margin: 3px;
        }

        .input-group input {
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }


        </style>
    </head>

    <body>

        <!-- alert message start-->

        <?php 
// echo $alert;
?>
        <!-- alert message end-->

        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Offcanvas Menu Section Begin -->
        <div class="offcanvas-menu-overlay"></div>
        <div class="offcanvas-menu-wrapper">
            <div class="canvas-close">
                <i class="fa fa-close"></i>
            </div>
            <div class="canvas-search search-switch">
                <i class="fa fa-search"></i>
            </div>
            <nav class="canvas-menu mobile-menu">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./about-us.php">About Us</a></li>
                    <!-- <li><a href="./classes.html">Classes</a></li> -->
                    <li><a href="./services.php">Services</a></li>
                    <!-- <li><a href="./team.html">Our Team</a></li> -->
                    <li><a href="#">Pages</a>
                        <ul class="dropdown">
                            <!-- <li><a href="./about-us.php">About us</a></li> -->
                            <!-- <li><a href="./class-timetable.html">Classes timetable</a></li> -->
                            <li><a href="./bmi-calculator.php">BMR calculate</a></li>
                            <!-- <li><a href="./team.php">Our team</a></li> -->
                            <!-- <li><a href="./gallery.html">Gallery</a></li> -->
                            <!-- <li><a href="./blog.html">Our blog</a></li> -->
                            <!-- <li><a href="./404.html">404</a></li> -->
                        </ul>
                    </li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
            <div class="canvas-social">
                <a href="https://www.facebook.com/ayah.imad.fb/"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/login/"><i class="fa fa-twitter"></i></a>
                <a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
                <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                <a href="register.php"><i class="fa fa-sign-in"></i></a>
            </div>
        </div>
        <!-- Offcanvas Menu Section End -->

        <!-- Header Section Begin -->
        <header class="header-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="./index.php">
                                <img src="img/logo4.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="nav-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Home</a></li>
                                <li><a href="./about-us.php">About Us</a></li>
                                <li><a href="./services.php">Services</a></li>
                                <!-- <li><a href="./team.html">Our Team</a></li> -->
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <!-- <li><a href="./about-us.php">About us</a></li> -->
                                        <!-- <li><a href="./class-timetable.html">Classes timetable</a></li> -->
                                        <li><a href="./bmr-calculator.php">BMR calculate</a></li>
                                        <li><a href="./appointment.php">Appointment</a></li>

                                        <!-- <li><a href="./team.html">Our team</a></li> -->
                                        <!-- <li><a href="./gallery.html">Gallery</a></li> -->
                                        <!-- <li><a href="./blog.html">Our blog</a></li> -->
                                        <!-- <li><a href="./404.html">404</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="top-option">
                            <div class="to-search search-switch">
                                <i class="fa fa-search"></i>
                            </div>
                            <div class="to-social">
                                <a href="https://www.facebook.com/ayah.imad.fb/"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/login/"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
                                <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                                <a href="register.php"><i class="fa fa-sign-in"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas-open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
        <!-- Header End -->
