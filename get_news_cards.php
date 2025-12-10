<?php
require_once "server/connect.php";

$stmt = $conn->prepare("SELECT * FROM uutinen");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<a href='#'>";
    echo "<article class='uutinen'>";
    echo "<img src='".$row["kuva"]."' alt=''>";
    echo "<h2>".$row["otsikko"]."</h2>";
    echo "<p>".$row["teksti"]."</p>";
    echo "</article>";
    echo "</a>";
}
?>