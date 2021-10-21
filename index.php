<?php 
require './database.php';

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
        <header>
            <img src="./img/spotify-logo.png" alt="Spotify logo">
        </header>
        <main>
            <div class="container">
                <?php foreach($database as $album) { ?>
                    <div class="card">
                        <img src="<?php echo $album['poster']; ?>" alt="<?php $album['title']; ?>">
                        <h2><?php echo $album['title'] ?></h2>
                        <p><?php echo $album['author']?></p>
                        <p><?php echo $album['year']?></p>
                    </div>
                <?php }; ?>
            </div>
        </main>
        
    </body>
</html>