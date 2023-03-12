<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pileshkiq Contacts</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function(){
            emailjs.init("yoQpUes27FmPcUUZR");
        })();
    </script>
    <script src="../js/contacts.js"></script>
</head>

<body class="contacts-body">
    <?php 
        include_once 'header.php';
    ?>

    <div class="contacts-container">
        <form class="contacts-form" onsubmit=" reset(); return false;">
            <h1>Contact us</h1>
            <?php 
                if (isset($_SESSION["userID"])) {
                    echo "<input type='text' id='name' class='name' value='$_SESSION[username]' required>";
                    echo "<input type='email' id='email' class='email' value='$_SESSION[email]' required>";
                    echo "<textarea id='message' rows='4' placeholder='your text goes here' required></textarea>";
                    echo "<button type='submit' onclick='sendEmail();'>Send</button>";
                } 
                else {
                    echo "<input type='text' id='name' placeholder='name' required>";
                    echo "<input type='email' id='email' placeholder='email' required>";
                    echo "<textarea id='message' rows='4' placeholder='your text goes here' required></textarea>";
                    echo "<button type='submit' onclick='sendEmail();'>Send</button>";
                }
            ?>
        </form>
    </div>

    <?php 
        include_once "footer.html";
    ?>
</body>

</html>