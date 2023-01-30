<?php
    session_start();
    include_once "../inc/classes/Connect.php";
    $db = new Connect;

    $db->addToCart($_SESSION["user"]["ID"], 0);
?>