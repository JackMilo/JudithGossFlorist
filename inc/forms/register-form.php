<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        include "../inc/classes/Connect.php";
        $db = new Connect;

        $db->register($_POST["firstName"], $_POST["secondName"], $_POST["email"], $_POST["password"], $_POST["rpassword"]);

        header("Location: ../pages/login.php");
    }
?>

<form method="post" action="../pages/register.php">
    <div class="m-3">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" name="firstName">
    </div>
    <div class="m-3">
        <label for="secondName" class="form-label">Second Name</label>
        <input type="text" class="form-control" id="secondName" name="secondName">
    </div>

    <div class="m-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="m-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="m-3">
        <label for="rpassword" class="form-label">Retype Password</label>
        <input type="password" class="form-control" id="rpassword" name="rpassword">
    </div>

    <div class="m-3 mx-auto">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>