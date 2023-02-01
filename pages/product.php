<?php
    session_start();
    $title = "Login - Judith Goss Florist";
    require_once "../inc/header.php";
    require_once "../inc/nav.php";

    include_once "../inc/classes/Connect.php";
    $db = new Connect;

    $_SESSION["product"] = mysqli_fetch_assoc($db->getProductsByID($_GET["id"]));
?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center">
                        <img class="img-thumbnail" src="<?="../img/".$_SESSION["product"]["imgURL"]?>" alt="Card image cap">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center">
                        <h1><?=$_SESSION["product"]["name"]?></h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center">
                        <h2><?=$_SESSION["product"]["description"]?></h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center">
                        <h2>£<?=$_SESSION["product"]["price"]?></h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center">
                        <?php if (isset($_SESSION["user"]["firstName"])):?>
                            <a class="btn btn-primary d-flex justify-content-center" href="../pages/addToCart.php" role="button">Add to Cart</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-4 d-flex justify-content-center">
                        <h1>Reviews</h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php

                        $query = $db->getReviewsByID($_SESSION["product"]["ID"]);

                        if($query)
                        {
                            while($row = mysqli_fetch_assoc($query))
                            {
                                ?>
                                    <div class="col-12 d-flex justify-content-center">
                                        <div class="card" style="width: 18rem;">
                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-center"><?=$row['stars']?> Stars</h5>
                                                <h5 class="card-title d-flex justify-content-center"><?=$row['comment']?></h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php          
                            }
                        }
                    ?>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-4 d-flex justify-content-center">
                        <?php if (isset($_SESSION["user"]["firstName"])):?>
                            <a class="btn btn-primary d-flex justify-content-center" href="../pages/makeReview.php" role="button">Create Review</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once "../inc/footer.php";
?>