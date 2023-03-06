<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <title>Document</title>
</head>

<body>
    <?php
        @include_once '../html/header.php';
    ?>

    <div class="container">
        <form class="form">
            <h1>User Information</h1>
            <div class="form-group">
                <h2>Username: <?php echo "".$_SESSION["username"]."" ?></h2>
            </div>
            <div class="form-group">
                <h2>Email: <?php echo "".$_SESSION["email"]."" ?></h2>
            </div>
            <div class="form-group">
                <h2>UserID: <?php echo "".$_SESSION["userID"]."" ?></h2>
            </div>
            <a href="includes/logout.inc.php" class="logout-btn">Logout</a>
        </form>
    </div>


    <footer>
        <p>&copy;2023 Pileshkiq</p>
    </footer>
</body>

</html>