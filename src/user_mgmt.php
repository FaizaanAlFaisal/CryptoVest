<?php 
    $username = "";
    $email = "";

    include_once("./config.php");


    if (isset($_POST['register'])) {

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $password = md5($password);

        $usernameCheck = $conn->query("SELECT * FROM users WHERE username='$username'");
        $emailCheck = $conn->query("SELECT * FROM users WHERE email='$email'");

        if($usernameCheck->num_rows > 0 && $emailCheck->num_rows > 0) echo "<script>alert('Username and email already taken!');</script>";
        else if($emailCheck->num_rows > 0) echo "<script>alert('Email already in use!');</script>";
        else if($usernameCheck->num_rows > 0) echo "<script>alert('Username already taken!');</script>";
        else{
            $conn->query("INSERT INTO users (username, email, password, usd, btc, eth, ada) VALUES('$username', '$email', '$password', 0, 0, 0, 0)");
            
            session_destroy();
            session_start();

            $_SESSION['username'] = $username;
            header('location: ./homepage.php');
        }
    }


    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $password = md5($password);
        
        $result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password';");

        if($result->num_rows == 1){
            session_destroy();
            session_start();
        
            $_SESSION['username'] = $username;
            header('location: ./homepage.php');
        }
        else echo "<script>alert('Username or Password are incorrect!');</script>";
    }

    $conn->close();
?>