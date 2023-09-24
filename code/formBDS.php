<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <?php 
    include_once "BDS.php"
    ?>
    <ul>
        <li >Nom:<?php $_GET["nom"]?></li>
        <li>Prenom:<?php $_GET["prenom"]?></li>
        <li>Telephone:<?php $_GET["telephone"]?></li>
        <li>mail:<?php $_GET["email"]?> </li>
        <li>filière <?php $_GET["filière"]?></li>
    </ul>
</body>
</html>