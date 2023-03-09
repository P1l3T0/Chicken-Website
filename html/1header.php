<?php 
    session_start();
?>

<link rel="stylesheet" href="../css/header.css">
<script defer src="../js/header.js"></script>
<div class="prelaoder" id="preloader"></div>

<header>
    <a class="links" href="../html/home.php"><h1>Pileshkiq™</h1></a>
        <nav>
            <ul>
                <li><a href="../html/about.php">ABOUT</a></li>
                <li><a href="../html/contacts.php">CONTACTS</a></li>
                <?php 
                    if (isset($_SESSION["userID"]))
                        echo "<li><a href='../php/profile.php'>" .$_SESSION["username"]. "</a></li>";
                    else
                        echo "<li><a href='../php/login.php'>LOG IN</a></li>";
                ?>
            </ul>
        </nav>
</header>