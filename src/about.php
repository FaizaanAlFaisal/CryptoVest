<!DOCTYPE html>

<?php

    include_once("./config.php"); //mysqli config

    

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoVest - About</title>

    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <script src="./bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./bootstrap/jquery-3.6.0.min.js"></script>
    <!-- included bootstrap css and js minimized bundles + jquery -->

    <script src="https://kit.fontawesome.com/d844771417.js" crossorigin="anonymous"></script>
    <!-- social media icons library -->

    <link rel="stylesheet" href="./styles.css">
    <!-- personal stylesheet -->

</head>

<body class="primaryBackground">

    <?php include("./nav.php"); ?> 
    

    <br><br>
    <!-- main page content -->
    <div class="content my-5 textContent">

        <h1 class="display-3 text-light mb-4">About CryptoVest</h1>

        <br>
        <hr> <br><br>
        <h1 class="display-6 text-light mb-4">Our Mission:</h1>
        <p class="text-md-left">
            CryptoVest is a platform and wallet for exchange of cryptocurrencies like Bitcoin, Etherium, Cordana, etc.
            We strive to create a tool that is easy-to-use and provides all functionalities one could desire from such a
            tool.
            Our mission is to become a part of the infrastructure and integral services needed to thrive in the
            blockchain
            and cryptocurrencies environment.
        </p>

        <br><br><br>
        <hr>
        <br><br><br>
        <h1 class="display-6 text-light mb-4">The Team:</h1>
        <p>
            Our team comprises of 3 members. All of us are students in NUST (National University of Sciences &
            Technology),
            studying Computer Science in SEECS (School of Electrical Engineering & Computer Science).
        </p>

        <br><br>
        <div class="groupMembers row text-center">
            <div class="col-12 col-md-4">Ashir Raza <br>
                <p>CMS ID: 337876</p>
            </div>
            <div class="col-12 col-md-4">Faizaan Al Faisal <br>
                <p>CMS ID: 342626</p>
            </div>
            <div class="col-12 col-md-4">Umair Khalid Khan <br>
                <p>CMS ID: 337959</p>
            </div>
        </div>
        <br><br>
        <hr>
        <br><br>
    </div>


    <!-- page footer -->
    <footer class="py-3 mt-5 blackBackground text-center" style="border-radius: 50px 50px 0 0;">
        <ul class="nav pt-2 pb-3 my-3 mx-auto border-bottom justify-content-center col-6 row footerLinks">
            <li class="nav-item col-4 col-md-3"><a href="./homepage.html">Home</a></li>
            <li class="nav-item col-4 col-md-3"><a href="./trading.html">Trading</a></li>
            <li class="nav-item col-4 col-md-3"><a href="./about.html">About</a></li>
        </ul>

        <!-- social media icons, facebook and twitter -->
        <div class="border-bottom pb-3 mb-3 col-4 mx-auto">
            <a href="#" class="icons">
                <span class="fa-stack fa-1x fa-lg">
                    <i class="fa-solid fa-circle fa-stack-2x" style="color: #3B5998;"></i>
                    <i class="fa fa-facebook fa-stack-1x"></i>
                </span>
            </a>
            <a href="#" class="icons">
                <span class="fa-stack fa-1x fa-lg">
                    <i class="fa-solid fa-circle fa-stack-2x" style="color: #1da1f2;"></i>
                    <i class="fa fa-twitter fa-stack-1x"></i>
                </span>
            </a>
        </div>

        <p>
            CryptoVest © 2022
        </p>
    </footer>

</body>

</html>