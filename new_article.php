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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lexend+Deca:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="js/dark_mode.js" defer></script>
    <script src="js/new_article.js" defer></script>
    <title>Luo uusi uutinen</title>
</head>
<body class="light-theme">
    <?php require_once "header.php"; ?>

    <main>
        <section id="loginFormParent">
            <form action="upload.php" method="POST" enctype="multipart/form-data" class="loginForm">
                <label for="otsikko">Otsikko:</label><br>
                <input type="text" id="otsikko" name="otsikko" required><br>

                <label for="teksti">Teksti:</label><br>
                <input type="text" id="teksti" name="teksti" required><br>

                <label for="file">Kuva:</label><br>
                <input type="file" id="submit_image_input" name="file" accept="image/png, image/jpeg"/><br>
                <img class="previewImage" id="previewImage" src="#" alt="uploaded image"/><br>

                <input type="submit" value="Luo uusi uutinen">
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