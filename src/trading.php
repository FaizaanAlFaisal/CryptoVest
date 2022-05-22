<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoVest - Trading</title>

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
        <br><br><br>
        <h1 class="display-2 text-light mx-5 mb-5">Trading</h1>

        <div class="container-fluid">

            <div class="col-12 row text-center">
                <div class="col-md mx-2 mb-0 py-4">
                    <h3>BTC/USDT</h3>
                    <img src="./images/btc.png" class="img-fluid">

                    <form class="row" style="margin-top: 1vw;">
                        <div class="form-group col-6" style="float: left;">
                            <input type="text" class="form-control primaryBackground mb-3" id="btcprice"
                                aria-describedby="BTCbuyprice" placeholder="Price">
                            <input type="text" class="form-control primaryBackground mb-3" id="btcamount"
                                placeholder="Amount BTC">
                            <button type="button" class="t-btn greencolor btn">BUY</button>

                        </div>

                        <div class="form-group col-6" style="float:right">
                            <input type="text" class="form-control primaryBackground mb-3" id="btcprice"
                                aria-describedby="BTCsellprice" placeholder="Price">
                            <input type="text" class="form-control primaryBackground mb-3" id="btcamount"
                                placeholder="Amount BTC">
                            <button type="button" class="t-btn redcolor btn">SELL</button>
                        </div>
                    </form>

                </div>

                <div class="col-md mx-1 mb-0 py-4">
                    <h3>ETH/USDT</h3>
                    <img src="./images/eth.png" class="img-fluid">

                    <form class="row" style="margin-top: 1vw;">
                        <div class="form-group col-6" style="float: left;">
                            <input type="text" class="form-control primaryBackground mb-3" id="btcprice"
                                aria-describedby="BTCbuyprice" placeholder="Price">
                            <input type="text" class="form-control primaryBackground mb-3" id="btcamount"
                                placeholder="Amount ETH">
                            <button type="button" class="t-btn greencolor btn">BUY</button>

                        </div>
                        <div class="form-group col-6" style="float:right">
                            <input type="text" class="form-control primaryBackground mb-3" id="btcprice"
                                aria-describedby="BTCsellprice" placeholder="Price">
                            <input type="text" class="form-control primaryBackground mb-3" id="btcamount"
                                placeholder="Amount ETH">
                            <button type="button" class="t-btn redcolor btn">SELL</button>
                        </div>
                    </form>

                </div>

                <div class="col-md mx-0 mb-0 py-4">

                    <h3>ADA/USDT</h3>
                    <img src="./images/ada.png" class="img-fluid">

                    <form class="row" style="margin-top: 1vw;">
                        <div class="form-group col-6" style="float: left;">
                            <input type="text" class="form-control primaryBackground mb-3" id="btcprice"
                                aria-describedby="BTCbuyprice" placeholder="Price">
                            <input type="text" class="form-control primaryBackground mb-3" id="btcamount"
                                placeholder="Amount ADA">
                            <button type="button" class="t-btn greencolor btn">BUY</button>
                        </div>
                        <div class="form-group col-6" style="float:right">
                            <input type="text" class="form-control primaryBackground mb-3" id="btcprice"
                                aria-describedby="BTCsellprice" placeholder="Price">
                            <input type="text" class="form-control primaryBackground mb-3" id="btcamount"
                                placeholder="Amount ADA">
                            <button type="button" class="t-btn redcolor btn">SELL</button>
                        </div>
                    </form>

                </div>
            </div>
            <br><br>
        </div>


    </div>
    </div>

    <?php include("./footer.php");?>

</body>

</html>