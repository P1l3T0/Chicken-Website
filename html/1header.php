<?php 
    session_start();
?>

<link rel="stylesheet" href="../css/style.css">
<script defer src="../js/header.js"></script>
<div class="prelaoder" id="preloader"></div>

<header>
    <a class="header-a" href="../html/home.php"><h1>Pileshkiq™</h1></a>
        <nav class="header-nav">
            <ul class="header-ul">
                <li class="header-li"><a class="header-a" href="../html/about.php">ABOUT</a></li>
                <li class="header-li"><a class="header-a" href="../html/contacts.php">CONTACTS</a></li>
                <?php 
                    if (isset($_SESSION["userID"]))
                        echo "<li class='header-li'><a class='header-a' href='../html/profile.php'>" .$_SESSION["username"]. "</a></li>";
                    else
                        echo "<li class='header-li'><a class='header-a' href='../html/login.php'>LOG IN</a></li>";
                ?>
            </ul>
        </nav>
</header>