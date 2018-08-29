<?php
include_once "Login.class.php";
$login=new Login();

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Hair Designer</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/logstyle.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    </head>
    <body>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="app.js"></script>
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                                                                    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                                   e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                                   e.src='https://www.google-analytics.com/analytics.js';
                                   r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <div class="login">
            <h1></h1>
            <form method="post" action="login.php" name="login"></form>
            <div class="home"></div>
        </div>

        <center>
            <div id="chooseQueue" class="login">
                <br><br> <p></p>
                <form method="post" action="login.php" name="" id="choose"></form>
                <br>
                <div id="logout"></div>
                <div class="home"></div>
            </div>
        </center>



    </body>

</html>


