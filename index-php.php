<!-- Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, CSS, JS, VueJS, PHP
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Passate a questa solo dopo aver fatto la prima milestone
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue. -->

<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- header -->
    <?php include_once __DIR__ . '/partials/header.php' ?>

    <main>
        <!-- cards -->
        <?php include_once __DIR__ . '/partials/card.php' ?>
    </main>

    <!-- footer -->
    <?php include_once __DIR__ . '/partials/footer.php' ?>

</body>
</html>