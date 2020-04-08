<?php
include_once "./includes/phpcode.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="stylesheet.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle 10 characters uit de database</h1>
</header>
<div id="container">
<?php 
for($i = 0; $i <= $idcount; $i++){
    $sql = "SELECT * FROM characters ORDER BY name ASC LIMIT $i, 1";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
include 'includes/Overview.php';
}
$conn = NULL;
?>
</div>
<footer>&copy; Kevin Bouwmeester 2020</footer>
</body>
</html>