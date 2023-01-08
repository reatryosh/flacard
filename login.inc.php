<?php

if (isset($_POST["submit"])){

    $name = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInput($username, $pwd) !== false) {
        header("location: ../signin.php?error=emptyinput");
        exit();
    }
    loginUser($conn, $username, $pwd);
}
    else {
        header("location: ../login.php");
        exit();
    }