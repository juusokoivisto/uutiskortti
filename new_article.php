<?php 
session_start();

if(!isset($_SESSION["tunnus"])) {
    header("location:/");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <script>
        if (localStorage.getItem("darkMode") == true) {
            document.body.classList.add("dark-theme");
        }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lexend+Deca:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="dark_mode.js" defer></script>
    <title>Luo uusi uutinen</title>
</head>
<body class="light-theme">
    <script>
        let darkMode = localStorage.getItem("darkMode");
        if(darkMode == "true") {
            document.body.classList.add("dark-theme");
        }
    </script>

    <header>
        <nav aria-label="Primary navigation">
            <button id="loginButton" aria-label="Login button" onclick="location.href='/login.php'">Kirjaudu</button>
            <button id="createArticleButton" aria-label="Crete article button" onclick="location.href='/new_article.php'">Uusi uutinen</button>
            <button id="darkModeToggle" aria-label="Toggle dark mode">
                <img id="darkModeToggle-icon" src="assets/dark_mode.svg" alt="" width="32" height="32">
            </button>
        </nav>
    </header>

    <main>
        <div>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <label for="otsikko">Otsikko:</label><br>
                <input type="text" id="otsikko" name="otsikko" required><br>
                <label for="teksti">Teksti:</label><br>
                <input type="text" id="teksti" name="teksti" required><br>
                <label for="file">Kuva:</label><br>
                <input type="file" id="file" name="file" accept="image/png, image/jpeg"/><br>
                <input type="submit" value="Submit">
            </form>

            <?php if(isset($_SESSION["warning"])) : ?>
                <span>
                    <?php echo $_SESSION["warning"]; ?>
                </span>        
            <?php endif; ?>
        </div>
    </main>
</body>
</html>