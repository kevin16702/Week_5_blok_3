<?php
include_once "phpcode.php";
$sql = "SELECT * FROM characters ORDER BY name ASC";
$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$id = $_GET["id"];
$sql2 = "SELECT * FROM characters WHERE id = $id";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="../stylesheet.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?= $row2["name"]; ?></h1>
    <a class="backbutton" href="../index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src=<?= "../images/" . $row2["avatar"]; ?>>
            <div class="stats" style="background-color: yellowgreen">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?= $row2["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?= $row2["attack"]; ?> </li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?= $row2["defense"]; ?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>:<?= $row2["weapon"]; ?></li>
                    <li><b>Armor</b>: <?= $row2["armor"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
            <?= $row2["bio"] ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy;  Kevin Bouwmeester  2020</footer>
</body>
</html>