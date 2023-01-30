<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="../pages/home.php">Judith Goss Florist</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../pages/home.php">Home</a>
                </li>

            </ul>
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <?php if (isset($_SESSION["user"])):?>
                <li class="nav-item navbar-right">
                    <a class="nav-link active" aria-current="page" href="../pages/cart.php">Cart</a>
                </li>
                <?php else: ?>
                <li class="nav-item navbar-right">
                    <a class="nav-link active" aria-current="page" href="../pages/login.php">Login</a>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>