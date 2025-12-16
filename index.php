<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lexend+Deca:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="js/dark_mode.js" defer></script>
    <title>Uutiskortti</title>

    <script>
        const darkMode = localStorage.getItem("darkMode") === "true";
        if (darkMode) document.documentElement.classList.add("dark-theme");
    </script>
</head>
<body class="light-theme">
    <?php require_once "header.php"; ?>

    <main>
        <section class="uutiset">
            <?php require_once "get_news_cards.php"; ?>
        </section>
    </main>

    <noscript>You need to enable JavaScript to view the full site.</noscript>
</body>
</html>
