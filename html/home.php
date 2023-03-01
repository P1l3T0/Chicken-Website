<!DOCTYPE html>

<html>

<head>
    <title>Pileshkiq</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/home.css">
    <script defer src="../js/home.js"></script>
</head>

<body>
    <?php 
        include_once '../php/header.php';
    ?>

    <section class="section-style chicken-image">
        <h1 class="fact-display">asdasd</h1>
        <?php 
                if (isset($_SESSION["userID"])) 
                    echo "<h2>Welcome " . $_SESSION["username"] . " to Pileshkiq!</h2> ";
                else 
                    echo "<h2>Welcome to Pileshkiq!</h2>";
                ?>
        <p>Learn everything you need to know about chicken.</p>
    </section>

    <section class="featured">
        <h2 class="featured-content">Featured Content</h2>
        <div class="cards">
            <div class="container tooltip">
                <span class="tooltip-text">Discover the best breeds of chicken!</span>
                <a href="../html/top-breeds.php" class="image-button">
                    <img class="image" src="../pictures/AIpile1.webp" alt="hen with tie"></a>
                <h3>Top Breeds</h3>
            </div>

            <div class="container tooltip">
                <span class="tooltip-text">Join the awesome chicken community!</span>
                <a href="https://youtu.be/dQw4w9WgXcQ" class="image-button">
                    <img class="image" src="../pictures/AIpile2.webp" alt="Latest Community News"></a>
                <h3>Community</h3>
            </div>

            <div class="container tooltip">
                <span class="tooltip-text">View amazing pictures of chicken!</span>
                <a href="../html/gallery.php" class="image-button">
                    <img class="image" src="../pictures/AIpile3.webp" alt="Chicken Gallery"></a>
                <h3>Chicken Gallery</h3>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy;2023 Pileshkiq</p>
    </footer>
</body>

</html>