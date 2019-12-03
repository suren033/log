<?php
    session_start();

    if (isset($_POST["button"])) {
        session_destroy();
        unset($_POST["username"]);
        unset($_POST["password"]);
        header("location: login/login.php");
    }
?>