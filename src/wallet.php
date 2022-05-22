<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>

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
        <h1 class="display-5 mt-5 mb-4 text-light">Wallet:</h1>

        <div class="table-responsive">
            <table class="table alt-pagination wallet-wrapper table-dark text-light">
                <thead>
                    <tr>
                        <td>Currency</td>
                        <td>Amount Owned</td>
                        <td>USD Equivalent</td>
                        <td>Trade</td>
                    </tr>
                </thead>

                <tbody>


                </tbody>
            </table>
        </div>
    </div>

    <?php include("./footer.php");?>

</body>

</html>