<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/31433afbf8.js" crossorigin="anonymous"></script>
    <
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <header>Send us a Message</header>
        <form method="post" action="#">
            <div class="dbl-field">
                <div class="field">
                    <input type="text" name="name" placeholder="Enter your name">
                    <i class='fas fa-user'></i>
                </div>
                <div class="field">
                    <input type="text" name="email" placeholder="Enter your email">
                    <i class='fas fa-envelope'></i>
                </div>
            </div>
            <div class="dbl-field">
                <div class="field">
                    <input type="text" name="phone" placeholder="Enter your phone">
                    <i class='fas fa-phone-alt'></i>
                </div>
                <div class="field">
                    <input type="text" name="website" placeholder="Enter your website">
                    <i class='fas fa-globe'></i>
                </div>
            </div>
            <div class="message">
                <textarea placeholder="Write your message" name="message"></textarea>
                <i class="material-icons"></i>
            </div>
            <div class="button-area">
                <button type="submit">Send Message</button>
                <span></span>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>

<?php

?>