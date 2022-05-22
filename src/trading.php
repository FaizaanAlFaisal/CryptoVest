<!DOCTYPE html>
<html lang="en">

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