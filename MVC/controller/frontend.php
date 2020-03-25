<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

// Fonction qui redirige vers la page d'accueil
function mainPage() {
    require('view/frontend/mainPageView.php');
}

// Fonction qui redirige vers la page de contact
function contact() {
    require('view/frontend/contact.php');
}

// Fonction pour récupérer les posts dans la base de données
function listPosts() {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    require('view/frontend/listPostsView.php');
}

// Fonction qui récupère chaque post et ses commentaires
function postView() {
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

// Fonction qui permet d'ajouter un commentaire
function addComment($postId, $author, $comment) {
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->addComment($postId, $author, $comment);
    
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire.');
    } else {
        header('location:index.php?action=postView&id='. $postId);
    }
}

// Fonction qui permet d'effacer un commentaire en récupérant son ID et celui du post
function deleteComment($commentId, $postId) {
    $commentManager = new CommentManager();

    $affectedComment = $commentManager->deleteComment($commentId);
    
    if ($affectedComment === false) {
        throw new Exception('Impossible d\'effacer le commentaire.');
    } else {
        header('location:index.php?action=postView&id=' . $postId);
    }
}

// Fonction qui permet de signaler un commentaire en récupérant son ID et celui du post
function reportComment($commentId, $postId) {
    $commentManager = new CommentManager();

    $reportedComment = $commentManager->reportComment($commentId);

    if ($reportedComment === false) {
        throw new Exception('Impossible de signaler le commentaire.');
    } else {
        header('location:index.php?action=postView&id=' .$postId);
    }
}

