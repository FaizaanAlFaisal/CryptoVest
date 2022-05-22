<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoVest - Login</title>

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


    <div class="bg-image" style="background-image: url('./images/patterns-dark-grey-3648.jpg')">

        <div id="login">
            <div class="container">

                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">

                            <form id="login-form" class="form" action="" method="post">
                                
                                <h3 style="color:#BB86FC" class="text-center">Login</h3>
                                
                                <div class="form-group">
                                    <label for="username" class="">Username:</label><br>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>
                                <br>
                                
                                <div class="form-group">
                                    <label for="password" class="">Password:</label><br>
                                    <input type="text" name="password" id="password" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="remember-me" id="rmbrme" class="mx-auto" style="margin-bottom: 5px;">
                                        Remember me
                                        <input id="remember-me" name="remember-me" type="checkbox" 
                                        style="vertical-align: middle; margin-left: 10px;">
                                    </label>
                                    <br>
                                    <input type="submit" name="submit" class="btn primaryColour btn-md col-12" value="Submit">
                                </div>
                                
                                <div id="register-link">
                                    <a href="#" class="">Register here</a>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br><br>
    </div>
    
    
    
    <!-- page footer -->
    <footer class="py-3 blackBackground text-center">
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