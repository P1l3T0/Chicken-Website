<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pileshkiq Contacts</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="contacts-body">
    <?php 
        include_once 'header.php';
    ?>

    <div class="contacts-container">
        <form class="contacts-form" action="https://formsubmit.co/WafflePunisher@gmail.com" method="POST">
            <h1>Contact us</h1>
            <?php 
                if (isset($_SESSION["userID"])) {
                    echo "<input type='text' name='name' class='name' value='$_SESSION[username]' required>";
                    echo "<input type='email' name='email' class='email' value='$_SESSION[email]' required>";
                    echo "<textarea name='message' rows='4' placeholder='your text goes here' required></textarea>";
                    echo "<button type='submit' id='submit-button'>Send</button>";
                } 
                else {
                    echo "<input type='text' name='name' placeholder='name' required>";
                    echo "<input type='email' name='email' placeholder='email' required>";
                    echo "<textarea name='message' rows='4' placeholder='your text goes here' required></textarea>";
                    echo "<button type='submit' id='submit-button'>Send</button>";
                }
            ?>
        </form>
    </div>

    <?php 
        include_once "footer.html";
    ?>
</body>

</html>