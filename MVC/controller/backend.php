<?php

require_once('model/PostManager.php');
require_once('model/UserManager.php');

// Fonction permettant d'afficher un nouveau billet
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

// Fonction permettant d'ouvrir le formulaire pour créer un nouveau billet
function createPostForm()
{

    $action = 'createPost';
    $postId = '';
    $postTitle = '';
    $postContent = '';

    require('view/backend/postForm.php');
}

// Fonction permettant d'afficher un billet qui vient d'être modifié
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

// Fonction permettant d'ouvrir le formulaire pour modifier un billet avec le contenu déjà présent
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

// Fonction permettant de supprimer un billet
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

// Fonction permettant l'affichage du formulaire de connexion
function displayLogin()
{
    require('view/backend/loginView.php');
}

// Fonction permettant de s'identifier
function login()
{
    $userManager = new UserManager();

    $user = $userManager->getUsers($_POST['username'], $_POST['password']);

    // on vérifie si l'utilisateur est admin ou non pour limiter l'accès
    if ($user === false) {
        header('location:index.php?action=displayLogin');
    } else {
        if ($user['admin'] == 1) {
            header('location:index.php?action=displayPostForm');
        } else {
            header('location:index.php?action=listPosts');
        }
    }

    $_SESSION['username'] = $_POST['username'] ;
    $_SESSION['password'] = $_POST['password'] ;
}

// Fonction permettant la deconnexion de l'utilisateur
function disconnect()
{
    session_destroy();
    header('locationindex.php?action=mainPage');
}
