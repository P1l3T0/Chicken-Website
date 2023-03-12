<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pileshkiq Profile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="profile-body">
    <?php
        @include_once 'header.php';
    ?>

    <div class="profile-container">
        <form class="profile-form">
            <h1>User Information</h1>
            <div>
                <h2>Username: <?php echo "<span>".$_SESSION["username"]."</span>" ?></h2>
            </div>
            <div>
                <h2>Email: <?php echo "<span>".$_SESSION["email"]."</span>" ?></h2>
            </div>
            <div>
                <h2>UserID: <?php echo "<span>".$_SESSION["userID"]."</span>" ?></h2>
            </div>
            <a href="/includes/logout.inc.php" class="logout-button">Logout</a>
        </form>
    </div>

    <?php 
        include_once "footer.html";
    ?>
</body>

</html>