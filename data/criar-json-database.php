<?php
    include 'Database.php';
    include '../domain/Post.php';
    include '../domain/MockData.php';

    $posts = MockData::criarListaPost();
    //echo json_encode($posts, true);
    Database::saveDatabase( 'posts.json', $posts );

