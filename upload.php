<?php
include_once "server/connect.php";

if (!isset($_FILES["file"])) { 
    exit("No file uploaded."); 
}

$otsikko =          $_POST["otsikko"];
$teksti =           $_POST["teksti"];

$random =           rand(1,10000000);

$file =             $_FILES["file"]["name"];
$fileTmpName =      $_FILES["file"]["tmp_name"];
$fileSize =         $_FILES["file"]["size"];
$fileError =        $_FILES["file"]["error"];
$fileType =         $_FILES["file"]["type"];

$fileExt =          explode(".", $file);
$fileActualExt =    strtolower(end($fileExt));

$allowed =          array("jpg", "png", "jpeg");

if(in_array($fileActualExt, $allowed)) {
    if($fileError === 0) {
        if($fileSize < 5000000) {
            $fileNameNew = $random.".".$fileActualExt;
            $fileDestination = "images/".$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);

            $sql = "INSERT INTO uutinen (otsikko, teksti, kuva, kategoria) VALUES (:otsikko, :teksti, :fileNameNew, 3)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ":otsikko"=>$otsikko,
                ":teksti"=>$teksti,
                ":fileNameNew"=>$fileDestination
            ]);
        }
    }
}

header("location:/");
?>