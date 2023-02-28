<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        @include_once '../php/header.php';
    
        echo "<h1>". $_SESSION["username"] ."</h1>";
        echo "<h1>". $_SESSION["email"] ."</h1>";
        echo "<h1>". $_SESSION["userID"] ."</h1>";
    ?>
    <h1>LAINA</h1>
    <a href="includes/logout.inc.php">LOGOUT</a>
</body>

</html>