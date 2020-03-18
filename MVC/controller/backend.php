<?php

require_once('model/PostManager.php');

function updatePost($title, $content, $date) {
    $postManager = new PostManager();

    $updatedPost = $postManager->updatePost($title, $content, $date);

    if ($updatedPost === false) {
        throw new exception('Impossible de modifier le billet.');
    } else {
        header('location:index.php?action=updatePost');
    }
}

function deletePost($postId) {
    $postManager = new PostManager();

    $deletedPost = $postManager->deletePost($postId);

    if ($deletedPost === false) {
        throw new Exception('Impossible de supprimer le billet.');
    } else {
        header('location:index.php?action=listPosts');
    }
}

function displayPostForm() {

    $action = 'createPost';
    $postTitle = 'Crééz votre chapitre';
    $postContent = 'Saisissez ici votre texte';

    require('view/backend/postForm.php');
}

function createPost() {
    
}