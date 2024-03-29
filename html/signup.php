<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pileshkiq Sign Up</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="signup-body">
    <?php 
        include_once 'header.php';
    ?>
    
    <div class="signup form-container">
        <form action="../includes/signup.inc.php" method="POST">
            <h3>Sign up</h3>
            <input type="text" name="username" placeholder="Username">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdRepeat" placeholder="Confirm password">
            <input type="submit" name="submit" value="register" class="button">
            <p>Already have an account? <a href="login.php">Log in now!</a></p>
        </form>
    </div>

    <?php 
        include_once "footer.html";
    ?>
</body>

</html>