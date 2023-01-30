<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        include "../inc/classes/Connect.php";
        $db = new Connect;

        $db->makeReview($_SESSION["user"]["ID"], $_SESSION["product"]["ID"], $_POST["stars"], $_POST["comment"]);

        header("Location: ../pages/product.php?id=".$_SESSION['product']['ID']);
    }
?>

<form method="post" action="../pages/MakeReview.php">
    <div class="m-3">
        <label for="stars">Stars</label><br>
        <input type="number" id="stars" name="stars" min="1" max="5"> 
    </div> 
    <div class="m-3">
        <label for="comment" class="form-label">Comment</label>
        <input type="text" class="form-control" id="comment" name="comment">
    </div>
    <div class="m-3 mx-auto">
        <button type="submit" class="btn btn-primary">Upload Review</button>
    </div>
</form>