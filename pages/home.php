<?php
    session_start();
    $title = "Home - Judith Goss Florist";
    require_once "../inc/header.php";
    require_once "../inc/nav.php";

    include_once "../inc/classes/Connect.php";
    $db = new Connect;

    if (isset($_SESSION['user']))
    {
        echo "<h1>Welcome " . $_SESSION['user']['firstName'] . "</h1>";
    }
    else
    {
        echo "<h1>Welcome<h1>";
    }
?>

<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a class="btn btn-primary" href="../pages/home.php" role="button">All Flowers</a>
            <a class="btn btn-primary" href="../pages/home.php?typeID=0" role="button">Same Day</a>
            <a class="btn btn-primary" href="../pages/home.php?typeID=1" role="button">Click and Collect</a>
            <a class="btn btn-primary" href="../pages/home.php?typeID=2" role="button">Finishing Gifts</a>
    </div>
    <div class="row">
            <?php
                if (isset($_GET['typeID']))
                {
                    $query = $db->getProductsByType($_GET['typeID']);
                }
                else
                {
                    $query = $db->getAllProducts();
                }

                if($query)
                {
                    while($row = mysqli_fetch_assoc($query))
                    {
                        ?>
                        <div class="col-4 d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$row['name']?></h5>
                                    <h6 class="card-title"><?=$row['description']?></h5>
                                    <img class="card-img-top" src="<?="../img/".$row["imgURL"]?>" alt="Card image cap">
                                </div>
                            </div>
                        </div>
                        <?php                
                    }
                }
            ?>
        </div>
    </div>
</div>

<?php
    require_once "../inc/footer.php";
?>