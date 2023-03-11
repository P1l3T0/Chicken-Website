<?php

function emptyInputSignup($username, $email, $pwd, $pwdRepeat) {

    if (empty($username) || empty($email) || empty($pwd) || empty($pwdRepeat)) 
        $result = true;
    else 
        $result = false;
    
    return $result;
}


function invalidUsername($username) {
    
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username))
        $result = true;
    else 
        $result = false;
    
    return $result;
}

function invalidEmail($email) {
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        $result = true;
    else 
        $result = false;
    
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    
    if ($pwd !== $pwdRepeat)
        $result = true;
    else 
        $result = false;
    
    return $result;
}

function usernameExists($conn, $username, $email) {
    $result = "";
    $sql = "SELECT * FROM pileshkiq_users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn); //!user moje da pishe kod v poletata i da precaraka neshto 
                                        //!i pravim prepare statement za edin vid zashtita ig
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../html/signup.php?errot=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($resultData)) {
        mysqli_stmt_close($stmt);
        return $row;
    }
    else {
        $result = false;
        mysqli_stmt_close($stmt);
        return $result;
    }
}

function createUser($conn, $username, $email, $pwd) {
    $sql = "INSERT INTO pileshkiq_users (username, email, password) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn); 

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../html/signup.php?errot=stmtFailed");
        exit();
    }

    $hashedPassword = password_hash($pwd, PASSWORD_DEFAULT); 

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    @include_once "login.inc.php";
    exit();
}

function emptyInputLogin($username, $pwd) {

    if (empty($username) || empty($pwd)) 
        $result = true;
    else 
        $result = false;
    
    return $result;
}


function loginUser($conn, $username, $pwd) {
    $usernameExists = usernameExists($conn, $username, $username);

    if ($usernameExists === false) {
        header("Location: /html/login.php?error=usernameDoes'tExist");
        exit();
    }

    $pwdHashed = $usernameExists["password"];
    $checkPassword = password_verify($pwd, $pwdHashed);

    if ($checkPassword === false) {
        header("Location: /html/login.php?error=wrongLogin");
        exit();
    }
    else if ($checkPassword === true) {
        session_start();
        $_SESSION["userID"] = $usernameExists["userID"];
        $_SESSION["username"] = $usernameExists["username"];
        $_SESSION["email"] = $usernameExists["email"];

        header("Location: /html/home.php?error=successfulLogin");
        exit();
    }
}

?>