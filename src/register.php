<?php include("./user_mgmt.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoVest - Register</title>

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
                        <div id="login-box" class="col-md-12" style="height: 580px">

                            <form id="login-form" class="form" action="" method="post">
                                
                                <h3 style="color:#BB86FC" class="text-center">Register</h3>
                                
                                <div class="form-group">
                                    <label for="username" class="">Email:</label><br>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                                
                                <br>
                                <div class="form-group">
                                    <label for="username" class="">Username:</label><br>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                </div>
                                
                                <br>
                                <div class="form-group">
                                    <label for="password" class="">Password:</label><br>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>

                                <br>
                                <div class="form-group">
                                    <label for="password" class="">Confirm your password:</label><br>
                                    <input type="password" name="checkPassword" id="checkPassword" class="form-control" required>
                                </div>

                                <br><br>
                                <div class="form-group">
                                    <input type="submit" name="register" id="regBtn" class="btn primaryColour btn-md col-12" value="Create Account">
                                </div>
                                
                                <div id="register-link"> Already have an account?
                                    <a href="./login.php" class="textLinks">Login here!</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br><br>
    </div>
    
    <?php include("./footer.php");?>

    <script>
        $(function(){
            $('#regBtn').click(function(event){
                if($('#password').val() != $('#checkPassword').val()) {
                    event.preventDefault(); //if passwords do not match, prevent redirect
                    alert("Passwords do not match!");
                }
            });
        });
    </script>

</body>

</html>