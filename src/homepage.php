<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoVest - Home</title>

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

    <div class="bg-image" style="background-image: url('./images/patterns-dark-grey-3648.jpg'); border-radius: 0 0 50px 50px;">

        <div class="content">
            <br> <br>

            <!-- hide image on screens smaller than md/tablet sized windows -->
            <div class="d-none d-md-block" style="width: 25%; float: right; clear: none;">
                <img class="img-fluid imagesBody" src="./images/cryptocurrency-logos.png"
                    style="float:right; clear: none;">
            </div>

            <br>
            <h1 class="display-2 text-light" style="font-weight: 600;">Buy and Sell <br>Cryptocurrencies!</h1>


            <br><br><br>
            <!-- enter email + submit button -->
            <form class="row">
                <div class="form-group col-sm-12 col-md-8 col-lg-6">
                    <input class="form-control" type="email" placeholder="Enter email!" aria-label="submission">
                    <button type="button" class="col-12 btn btn-primary btn-lg primaryColour buttonHover"
                        style="margin: 10px 0;">Begin Trading!</button>
                </div>
            </form>
        </div>
        <br><br><br>

    </div>


    <!-- contains prices for main few crypto currencies shown in tabular form -->
    <div class="content">

        <br><br><br>
        <h2 class="display-6 text-light">Check the current Crypto-Market</h2>

        <br><br>
        <table class="table table-hover table-dark text-center">
            <thead>
                <th>Currency</th>
                <th>Last Price</th>
                <th>Today's Trend</th>
            </thead>

            <tbody>
                <tr class="increaseTrend" data-href="#">
                    <th scope="row">Bitcoin</td>
                    <td>$42,517</td>
                    <td id="trend">+0.26%</td>
                </tr>

                <tr class="decreaseTrend" data-href="#">
                    <th scope="row">Ethereum</td>
                    <td>$3,234</td>
                    <td id="trend">-0.05%</td>
                </tr>

                <tr class="decreaseTrend" data-href="#">
                    <th scope="row">ADA</td>
                    <td>$421.5</td>
                    <td id="trend">-1.36%</td>
                </tr>
            </tbody>
        </table>
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

    <!-- jquery/js script -->
    <script>
        $(function () {
            // cause data-hrefs in table to redirect to specified ref
            // allows whole table row to be clickable
            $('*[data-href]').on('click', function () {
                window.location = $(this).data("href");
            });
        });
    </script>

</body>

</html>