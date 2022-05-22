<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    include_once("./config.php");

    //executing queries to retrieve static content
    $head = $conn->query('SELECT content FROM static_content WHERE page="home" AND section="description"')->fetch_row()[0];
    $tableHead = $conn->query('SELECT content FROM static_content WHERE page="home" AND section="tableHead"')->fetch_row()[0];
    
    $conn->close(); //closing connection
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoVest - Home</title>

    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <script src="./bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./bootstrap/jquery-3.6.0.min.js"></script>
    <!-- included bootstrap css and js minimized bundles + jquery -->

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
            <h1 class="display-2 text-light" style="font-weight: 600;"><?=$head; ?></h1>


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
        <h2 class="display-6 text-light"><?=$tableHead; ?></h2>

        <br><br>
        <table class="table table-hover table-dark text-center currencies">
            <thead>
                <th>Currency</th>
                <th>Last Price</th>
                <th>Today's Trend</th>
            </thead>

            <tbody>

                <script>
                    (function tableUpdate() { //updates currency table every 5 seconds with information from database
                        $.ajax({
                            type: "GET",
                            url: "currencyUpdate.php",
                            dataType: "html",
                            success: function(response) {
                                $('table.currencies tbody').html(response);
                            },
                            complete: function() { //call function after 5 seconds
                                setTimeout(tableUpdate, 5000);
                            } 
                        });
                    })();
                </script>

            </tbody>
        </table>
        <br><br>

    </div>

    <?php include("./footer.php");?>

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