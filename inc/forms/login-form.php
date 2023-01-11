<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        include "../inc/classes/Connect.php";
        $db = new Connect;

        $_SESSION["user"] = $db->login($_POST["email"], $_POST["password"]);

        header("Location: ../pages/home.php");
    }
?>

<form method="post" action="../pages/login.php">
    <div class="m-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="m-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="m-3 mx-auto">
        <button type="submit" class="btn btn-primary">Login</button>
        <a class="btn btn-primary" href="../pages/register.php" role="button">Register</a>
    </div>
</form>