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
        include_once '1header.php';
    ?>

    <section class="section-style chicken-image">
        <h1 class="fact-display"></h1>
        <?php
        if (isset($_SESSION["userID"]))
            echo "<h2>Welcome " .$_SESSION["username"]. " to Pileshkiq!</h2> ";
        else
            echo "<h2>Welcome to Pileshkiq!</h2>";
        ?>
        <p>Learn everything you need to know about chicken</p>
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
                <span class="tooltip-text">Stay up-to-date with the news!</span>
                <a href="../html/news.php" class="image-button">
                    <img class="image" src="../pictures/AIpile2.webp" alt="Latest Community News"></a>
                <h3>Latest news</h3>
            </div>

            <div class="container tooltip">
                <span class="tooltip-text">View amazing pictures of chicken!</span>
                <a href="../html/gallery.php" class="image-button">
                    <img class="image" src="../pictures/AIpile3.webp" alt="Chicken Gallery"></a>
                <h3>Gallery</h3>
            </div>
        </div>
    </section>

    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>


        <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>


        <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>


        <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>


        <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe> -->

    <?php 
        include_once "2footer.html";
    ?>
</body>


</html>