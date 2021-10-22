<?php
require __DIR__ . '/../database.php';

header('Content-Type: application/json');

if(!empty($_GET['genre'])) {
    $genre = strtolower($_GET['genre']);
    $filteredDatabase = [];

    foreach($database as $album) {
        if($genre == strtolower($album['genre'])) {
            $filteredDatabase[] = $album;
        };

    }

    echo json_encode($filteredDatabase);
} else {
    echo json_encode($database);
}
?>