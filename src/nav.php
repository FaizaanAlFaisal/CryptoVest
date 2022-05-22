<nav class="navbar navbar-expand-lg navbar-light" style="background: rgb(187, 134, 252); font-weight: 500;">

<div class="container-fluid px-5">
    <a class="navbar-brand logo" href="./homepage.html">CryptoVest</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navigation">

        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 navItemHover py-2">

            <li class="nav-item px-2">
                <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == "/src/homepage.php" ? "active" : "");?>" href="./homepage.php">Home</a>
            </li>

            <li class="nav-item px-2">
                <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == "/src/trading.php" ? "active" : "");?>" href="./trading.php">Trading</a>
            </li>

            <li class="nav-item px-2">
                <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == "/src/about.php" ? "active" : "");?>" href="./about.php">About</a>
            </li>

            <li class="nav-item px-2">
                <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == "/src/login.php" ? "active" : "");?>" href="./login.php">Login</a>
            </li>

        </ul>
    </div>
</div>
</nav>