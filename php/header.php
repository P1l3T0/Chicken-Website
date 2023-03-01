<?php 
    session_start();
?>

<link rel="stylesheet" href="../css/header.css">

<header>
    <a class="links" href="../html/home.php"><h1>Pileshkiq™</h1></a>
        <nav>
            <ul>
                <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Latest news</a></li>
                <li><a href="../html/about.php">About</a></li>
                <li><a href="../html/contacts.php">Contacts</a></li>
                <?php 
                    if (isset($_SESSION["userID"])) {
                        echo "<li><a href='../php/profile.php'>" .$_SESSION["username"]. "</a></li>";
                    }
                    else {
                        echo "<li><a href='../php/login.php'>Log in</a></li>";
                    }
                ?>
            </ul>
        </nav>
</header>