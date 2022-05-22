<?php include("./user_mgmt.php");
    $check = $_GET['q'];
?>

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

        <div class="login">
            <div class="container">

                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">

                            <form id="login-form" class="form" action="" method="post">
                                
                                <h3 style="color:#BB86FC" class="text-center">Login</h3>
                                
                                <div class="form-group">
                                    <label for="username" class="">Username:</label><br>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                </div>
                                <br>
                                
                                <div class="form-group">
                                    <label for="password" class="">Password:</label><br>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>

                                <br><br>
                                <div class="form-group">
                                    <input type="submit" name="login" id="login" class="btn primaryColour btn-md col-12" value="Login">
                                </div>
                                
                                <div id="register-link"> New here?
                                    <a href="./register.php" class="textLinks">Register here!</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br><br>
    </div>
    
    <?php include("./footer.php");
    if ($check == 'login') echo "<script>alert('You must login to use that feature!')</script>"    
    ?>

</body>

</html>