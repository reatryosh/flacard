<?php

//functions for signup.inc.php

function emptyInputSignup($email, $username, $pwd, $pwdRepeat){
    $result;
    if(empty($username) || empty($email) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result;
    //checks if it matches to a-z 0-9, if not, it returns true,
    //as in true, that the user have made a mistake of not putting any
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
       $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    //if the user input is a proper email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result;
    if($pwd !== $pwdRepeat){
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}


function uidExists($conn, $email, $username){
  $sql = "SELECT * FROM users WHERE usersEmail = ? OR usersUid = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signin.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $email, $username);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);
  if ($row = mysqli_fetch_assoc($resultData)){
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);

}

function createUser($conn, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersEmail, usersUid, usersPwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn) ;
    if (!mysqli_stmt_prepare($stmt, $sql)){
      header("location: ../signin.php?error=stmtfailed");
      exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
  
    mysqli_stmt_bind_param($stmt, "sss", $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signin.php?error=none");
    exit();
  }

  function emptyInputLogin($username, $pwd){
    $result;
    if(empty($username) || empty($pwd)){
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false){
        header("location: ../signin.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = passwprd_verify($pwd, $pwdHashed);

    if($checkPwd === false){
        header("location: ../signin.php?error=wronglogin");
        exit(); 

    } else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../index.php");
        exit(); 
    }
}
