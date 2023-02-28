<?php 

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdRepeat'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($username, $email, $pwd, $pwdRepeat) !== false) {
        header("Location: ../signup.php?errot=emptyInput");
        exit();
    }
    if (invalidUsername($username) !== false) {
        header("Location: ../signup.php?errot=invalidUsername");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("Location: ../signup.php?errot=invalidEmail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("Location: ../signup.php?errot=passrodsDon'tMatch");
        exit();
    }
    if (usernameExists($conn, $username, $email) !== false) {
        header("Location: ../signup.php?errot=usernameExists");
        exit();
    }

    createUser($conn, $username, $email, $pwd);
}
else {
    header("Location: ../signup.php");
    exit();
}


?>