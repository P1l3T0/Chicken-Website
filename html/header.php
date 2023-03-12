<?php
session_start();
?>

<link rel="stylesheet" href="../css/style.css">
<script defer src="../js/home.js"></script>
<div class="prelaoder" id="preloader"></div>

<header>
    <a href="home.php"><h1>Pileshkiq™</h1></a>
    <nav class="hamburger-nav">
        <div class="open-menu"><i class="fa fa-bars"></i></div>
        <ul class="main-menu">
            <li class="hamburger-li"><a href="about.php">about</a></li>
            <li class="hamburger-li"><a href="contacts.php">contacts</a></li>
            <?php
            if (isset($_SESSION["userID"]))
                echo "<li class='hamburger-li'><a href='profile.php'>" .$_SESSION["username"]. "</a></li>";
            else
                echo "<li class='hamburger-li'><a href='login.php'>log in</a></li>";
            ?>

            <div class="close-menu"><i class="fa fa-times"></i></div>
        </ul>
    </nav>
</header>