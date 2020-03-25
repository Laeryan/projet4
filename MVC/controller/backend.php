<?php

require_once('model/PostManager.php');
require_once('model/UserManager.php');

function createPost($title, $content)
{

    $postManager = new PostManager();

    $newPost = $postManager->createPost($title, $content);
    if ($newPost === false) {
        throw new Exception('Impossible de créer le billet.');
    } else {
        header('location:index.php?action=listPosts');
    }
}

function createPostForm()
{

    $action = 'createPost';
    $postId = '';
    $postTitle = '';
    $postContent = '';

    require('view/backend/postForm.php');
}

function updatePost($title, $content, $postId)
{

    $postManager = new PostManager();

    $updatedPost = $postManager->updatePost($title, $content, $postId);

    if ($updatedPost === false) {
        throw new exception('Impossible de modifier le billet.');
    } else {
        header('location:index.php?action=postView&id=' . $postId);
    }
}

function updatePostForm($postId)
{

    $postManager = new PostManager();

    $updatePost = $postManager->getPost($postId);

    $action = 'updatePost';
    $postId = $updatePost['id'];
    $postTitle = $updatePost['title'];
    $postContent = $updatePost['content'];

    require('view/backend/postForm.php');
}

function deletePost($postId)
{

    $postManager = new PostManager();

    $deletedPost = $postManager->deletePost($postId);

    if ($deletedPost === false) {
        throw new Exception('Impossible de supprimer le billet.');
    } else {
        header('location:index.php?action=listPosts');
    }
}

function displayLogin()
{

    require('view/backend/loginView.php');
}

function login()
{

    $userManager = new UserManager();

    $user = $userManager->getUsers($_POST['username'], $_POST['password']);

    var_dump($user);
    var_dump($_POST);

    if ($user === false) {
        header('location:index.php?action=displayLogin');
    } else {
        if ($user['admin'] == 1) {
            header('location:index.php?action=displayPostForm');
        } else {
            header('location:index.php?action=listPosts');
        }
    }
    // $_SESSION['userName'] = $_POST['userName'] ; 
}
