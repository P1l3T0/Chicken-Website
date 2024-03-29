<!DOCTYPE html>

<html>

<head>
    <title>Pileshkiq Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script defer src="../js/home.js"></script>
</head>

<body class="home-body">
    <?php
        include_once 'header.php';
    ?>

    <section class="home-section">
        <h1 class="fact-display"></h1>
        <?php
            if (isset($_SESSION["userID"]))
                echo "<h2>Welcome <span>🐣" . $_SESSION["username"] . "🐣</span> to Pileshkiq!</h2> ";
            else
                echo "<h2>Welcome to Pileshkiq!</h2>";
        ?>
        <p>Learn everything you need to know about chicken</p>
    </section>

    <div class="featured">
    <h2 class="featured-content">Featured Content</h2>
        <div class="home-container">
            <a href="../html/top-breeds.php" class="image-button">
                <div class="home-cards tooltip">
                    <span class="tooltip-text">Discover the best breeds of chicken!</span>
                    <img class="image" src="../pictures/AIpile1.webp" alt="hen with tie">
                    <h3>Top Breeds</h3>
                </div>
            </a>
            <a href="../html/news.php" class="image-button">
                <div class="home-cards tooltip">
                    <span class="tooltip-text">Stay up-to-date with the news!</span>
                    <img class="image" src="../pictures/AIpile2.webp" alt="Latest Community News">
                    <h3>Latest news</h3>
                </div>
            </a>

            <a href="../html/gallery.php" class="image-button">
                <div class="home-cards tooltip">
                    <span class="tooltip-text">View amazing pictures of chicken!</span>
                    <img class="image" src="../pictures/AIpile3.webp" alt="Chicken Gallery">
                    <h3>Gallery</h3>
                </div>
            </a>
        </div>
    </div>

    <?php
        include_once "footer.html";
    ?>
</body>

</html>