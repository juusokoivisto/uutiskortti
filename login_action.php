<?php
require_once "server/connect.php";

session_start();

if(isset($_SESSION["tunnus"])) {
    header("location:/");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_REQUEST["f_username"]);
    $password = htmlspecialchars($_REQUEST["f_password"]);

    $sql = "SELECT * FROM users WHERE username=:username";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ":username"=>$username
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if(password_verify($password, $user["password"])) {
        $_SESSION["tunnus"] = $username;
        unset($_SESSION["warning"]);

        header("location:/");
        exit();
    } else {
        $_SESSION["warning"] = "Käyttäjätunnus tai salasana ei täsmää.";
        header("location:login.php");
        exit();
    }
}
?>