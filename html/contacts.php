<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pileshkiq Contacts</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contacts.css">
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

<body>
    <?php 
        include_once '../php/header.php';
    ?>

    <div class="container">
        <form onsubmit=" reset(); return false;">
            <h3>Contact us</h3>
            <?php 
                if (isset($_SESSION["userID"])) {
                    echo "<input type='text' id='name' value='$_SESSION[username]' required>";
                    echo "<input type='email' id='email' value='$_SESSION[email]' required>";
                    echo "<textarea id='message' rows='4' required></textarea>";
                    echo "<button type='submit' onclick='sendEmail();'>Send</button>";
                } 
                else {
                    echo "<input type='text' id='name' placeholder='name' required>";
                    echo "<input type='email' id='email' placeholder='email' required>";
                    echo "<textarea id='message' rows='4' required></textarea>";
                    echo "<button type='submit' onclick='sendEmail();'>Send</button>";
                }
            ?>
        </form>
    </div>



    <footer>
        <p>&copy;2023 Pileshkiq</p>
    </footer>

</body>

</html>