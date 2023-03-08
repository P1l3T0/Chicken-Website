<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pileshkiq Register</title>
    <link rel="stylesheet" href="../css/signup.css">
</head>

<body>
    <?php 
        include_once '../html/header.php';
    ?>
    
    <div class="form-container">
        <form action="includes/signup.inc.php" method="POST">
            <h3>Sign up now</h3>
            <input type="text" name="username" placeholder="Username">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdRepeat" placeholder="Confirm password">
            <input type="submit" name="submit" value="register" class="button">
            <p>Already have an account? <a href="login.php">Login now!</a></p>
        </form>
    </div>

    <footer>
        <p>&copy;2023 Pileshkiq</p>
    </footer>
</body>

</html>