<?php

require_once('model/PostManager.php');

function createPost($title, $content) {

    $postManager = new PostManager();

    $newPost = $postManager->createPost($title, $content);
    if ($newPost === false) {
        throw new Exception('Impossible de créer le billet.');
    } else {
        header('location:index.php?action=listPosts');
    }
}

function createPostForm() {

    $action = 'createPost';
    $postTitle = '';
    $postContent = '';

    require('view/backend/postForm.php');
}

function updatePost($title, $content, $date) {

    $postManager = new PostManager();

    $updatedPost = $postManager->updatePost($title, $content, $date);

    if ($updatedPost === false) {
        throw new exception('Impossible de modifier le billet.');
    } else {
        header('location:index.php?action=postView&id=' . $postId);
    }
}

function updatePostForm($postId) {

    $postManager = new PostManager();
    
    $updatePost = $postManager->getPost($postId);

    $action = 'updatePost';
    $postTitle = $updatePost['title'];
    $postContent = $updatePost['content'];

    require('view/backend/postForm.php');
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

