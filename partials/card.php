<?php

include __DIR__ . '/../server/db.php';

?>

<main>
    <?php foreach ($cards as $card) : ?>
        <div class="card">
            <img src="<?= $card['poster']; ?>" alt="">
            <h3> <?= $card['title']; ?> </h3>
            <h4> <?= $card['author']; ?> </h4>
            <h4> <?= $card['year']; ?> </h4>
        </div>
    <?php endforeach; ?>
</main>
