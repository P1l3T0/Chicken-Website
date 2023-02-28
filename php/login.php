<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>
    <?php 
        include 'header.php';
    ?>
    
    <div class="form-container">
        <form action="includes/login.inc.php" method="POST">
            <h3>Login now</h3>
            <input type="text" name="username" placeholder="Username / Email">
            <input type="password" name="pwd" placeholder="Password">
            <input type="submit" name="submit" value="Login" class="form-btn">
            <p>Don't have an account? <a href="signup.php">Register now!</a></p>
        </form>
    </div>
</body>

</html>


