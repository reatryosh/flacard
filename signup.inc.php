<?php

if (isset($_POST["submit"])){

    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //functions:
    //if user did not put any input to the form
    if (emptyInputSignup($email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../signin.php?error=emptyinput");
        exit();
    }

    //if user did not put a proper username
    if (invalidUid($username) !== false) {
        header("location: ../signin.php?error=invaliduid");
        exit();
    }
   
    //if user did not put a proper email
    if (invalidEmail($email) !== false) {
        header("location: ../signin.php?error=invalidemail");
        exit();
    }
    //if the password input does not match
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signin.php?error=passwordsdontmatch");
        exit();
    }
    //if username/email is already taken
    //uses $conn because it needs to check the database if it's already taken
    if (uidExists($conn, $email, $username) !== false) {
        header("location: ../signin.php?error=usernametakenoremailtaken");
        exit();
    }

    //if password is shorter than 8 characters
    //if (pwdLong($pwd) !== false) {
    //    header("location: ../signin.php?error=usernametaken");
    //    exit();
    //}

    //creates the account
    createUser($conn, $email, $username, $pwd);

} else {
    header("location: ../signin.php");
}