<?php
    session_start();
    $title = "Home - Judith Goss Florist";
    require_once "../inc/header.php";
    require_once "../inc/nav.php";

    echo "<h1>Welcome " . $_SESSION['user']['firstName'] . "</h1>";

    require_once "../inc/footer.php";
?>