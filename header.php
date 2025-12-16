<header>
    <nav aria-label="Primary navigation">
        <button id="homeButton" aria-label="Home button" onclick="location.href='/index.php'">Uutiset</button>
        <?php if(!isset($_SESSION["tunnus"])):?>
            <button id="loginButton" aria-label="Login button" onclick="location.href='/login.php'">Kirjaudu</button>
        <?php else: ?>
            <button id="logoutButton" aria-label="Logout button" onclick="location.href='/logout.php'">Kirjaudu ulos</button>
            <button id="createArticleButton" aria-label="Crete article button" onclick="location.href='/new_article.php'">Uusi uutinen</button>
        <?php endif ?>
        <button id="darkModeToggle" aria-label="Toggle dark mode">
            <img id="darkModeToggle-icon" src="assets/dark_mode.svg" alt="" width="32" height="32">
        </button>
    </nav>
</header>