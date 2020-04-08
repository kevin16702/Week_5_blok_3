


<head>
<link href="../stylesheet.css" rel="stylesheet"/>
</head>
    <a class="item" href=<?= "./includes/Characters.php?id=" . $row["id"]; ?>>
        <div class="left">
            <img class="avatar" src=<?=  "./images/" . $row["avatar"]; ?>>
        </div>
        <div class="right">
            <h2><?= $row["name"]; ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><?= $row["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?= $row["attack"]; ?> </li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?= $row["defense"] ?> </li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>