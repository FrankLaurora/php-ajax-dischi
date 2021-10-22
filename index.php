<?php 
require __DIR__ . '/database.php'
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <!-- /google fonts -->
        <title>PHP Dischi</title>
    </head>
    <body>
        <?php include __DIR__ . '/partials/template/header.php'; ?>

        <main>
            <div class="container">
                <?php foreach($database as $album) { ?>
                    <?php include __DIR__ . '/partials/template/card.php' ?>
                <?php }; ?>
            </div>
        </main>
        
    </body>
</html>