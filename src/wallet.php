<!DOCTYPE html>
<html lang="en">

<?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: ./login.php?q=login");
    }
    
    
    if (isset($_POST['addUSD'])) {
        include_once('./config.php');
        $user = $_SESSION['username'];
        $curVal = $conn->query("SELECT usd FROM users WHERE username='$user'")->fetch_assoc();
        
        $addVal = mysqli_real_escape_string($conn, $_POST['addValue']);

        $conn->query("UPDATE users SET usd=" . $curVal['usd'] + $addVal . " WHERE username='$user'");

        $conn->close();
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoVest - Wallet</title>

    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <script src="./bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./bootstrap/jquery-3.6.0.min.js"></script>
    <!-- included bootstrap css and js minimized bundles + jquery -->

    <link rel="stylesheet" href="./styles.css">
    <!-- personal stylesheet -->
</head>

<body class="primaryBackground">

    <?php include("./nav.php");?>

    <div class="content">
        <h1 class="display-5 mt-5 mb-4 text-light"><?= $_SESSION['username']; ?>'s Wallet:</h1>

        <div class="table-responsive">
            <table class="table alt-pagination wallet-wrapper table-dark text-light text-center">
                <thead>
                    <tr>
                        <td>Currency</td>
                        <td>Amount Owned</td>
                        <td>USD Equivalent</td>
                    </tr>
                </thead>

                <tbody>
                <?php 
                    include("./config.php");
                    $username = $_SESSION['username'];

                    $info = $conn->query("SELECT usd, btc, eth, ada FROM users WHERE username='$username';")->fetch_assoc();
                    echo '<tr id="usd"> <td>US Dollars</td> <td>' . $info['usd'] . '</td> <td>' . $info['usd'] . '</td></tr>';

                    $prices = $conn->query("SELECT currency, name, recent_price FROM currencies ORDER BY recent_price DESC");
                    for ($i = 0; $i < $prices->num_rows; $i++)
                    {
                        $row = $prices->fetch_assoc();
                        echo    '<tr id="' . $row['currency'] . '"> 
                                    <td>' . $row['name'] . '</td>
                                    <td>' . $info[$row['currency']] . '</td> 
                                    <td>' . $row['recent_price'] * $info[$row['currency']]  . '</td>
                                </tr>';
                    }
                    $conn->close();
                ?>
                </tbody>
            </table>
        </div>

        <br>  <hr style="color: white">  <br>  <br>
        <h1 class="display-5 text-light">Add US Dollars to Account:</h1>
        <form method="post" action="./wallet.php">
            <div class="row my-4">
                <div class="col-12 col-md-6">
                    <input class="form-control" type="number" id="addValue" name="addValue" min="0" required>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12 col-md-6 text-center">
                    <button type="submit" class="btn btn-primary btn-lg primaryColour buttonHover" id="addUSD" name="addUSD" style="width:100%">Add</button>
                </div>
            </div>
        </form>
        <br>  <hr style="color: white">  <br>  <br>
    </div>



    <?php include("./footer.php");?>

</body>

</html>