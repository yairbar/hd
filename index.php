<?php
require_once "controler.php";
require_once "email.php";
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Hair Designer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->





        <?php
        echo "<script> var IS_ADMIN;</script>";
        if (!empty($_SESSION["is_admin"])) {
            echo "<script> IS_ADMIN = true;</script>";
        }
        else {
            echo "<script> IS_ADMIN = false;</script>";
        }
        ?>




        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    </head>
    <body style="background-color:black;">
        <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

        <!-- Add your site or application content here -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="app.js"></script>
        <script src="indexApp.js"></script>
        <script src="push.min.js"></script>
        <script src="serviceWorker.min.js"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                                                                    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                                   e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                                   e.src='https://www.google-analytics.com/analytics.js';
                                   r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>



        <center>

            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000" data-pause="false">



                <div class="carousel-inner">

                    <div class="item active">
                        <img src="img/haircut3.jpeg" alt="Chania">
                        <div class="carousel-caption">

                        </div>
                    </div>

                    <div class="item">
                        <img src="img/haircut2.jpeg" alt="Chicago">
                        <div class="carousel-caption">

                        </div>
                    </div>

                    <div class="item">
                        <img src="img/haircut1.jpeg" alt="New York">
                        <div class="carousel-caption">

                        </div>
                    </div>

                    <div class="item">
                        <img src="img/haircut4.jpeg" alt="New York">
                        <div class="carousel-caption">

                        </div>
                    </div>

                </div>

            </div>
        </center>

        <a id="login" href="login.php" style="color:black;"><i class="fas fa-user fa-2x"></i></a>

        <center>
            <div id="queue"></div>
            <div id="ding"><source src="Ding-dong.wav" type="audio"></div>
        </center>


        <center>
            <div id="email">
                <form method="post" action="index.php" name="email" >
                    <input type="email" name="email" placeholder="Your email..." ><br>
                    <button type="submit" class="btn btn-primary btn-block btn-large" name="login" >SEND</button>
                </form>
            </div>
        </center>


<!--        <button id="push">click</button>-->
        
    </body>
</html>



