<?php

include __DIR__ . '/../server/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <card>
        <?php foreach ($cards as $card) : ?>
            <img src="<?= $card[poster]; ?>" alt="">
            <h2> <?= $card[title]; ?> </h2>
            <h4> <?= $card[author]; ?> </h4>
            <h4> <?= $card[year]; ?> </h4>
        <?php endforeach; ?>
    </card>
</body>
</html>