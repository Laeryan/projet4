<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts() {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    require('view/frontend/listPostsView.php');
}

function postView() {
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment) {
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);
    
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire.');
    } else {
        header('Location:index.php?action=postView&id=' . $postId);
    }
}

function deleteComment($commentId) {
    $commentManager = new CommentManager();

    $affectedComment = $commentManager->deleteComment($commentId);
    
    if ($affectedComment === false) {
        throw new Exception('Impossible d\'effacer le commentaire.');
    } else {
        header('Location:index.php?action=postView&id=' . $postId);
    }
}

function updateComment($newComment, $commentId, $postId) {
    $commentManager = new CommentManager();

    $affectedComment = $commentManager->updateComment($newComment, $commentId);

    if ($affectedComment === false) {
        throw new Exception('Impossible de modifier le commentaire.');
    } else {
        header('Location:index.php?action=postView&id=' . $postId);
    }
}

function reportComment($postId, $author, $comment, $postDate) {
    $commentManager = new CommentManager();

    $reportedComment = $commentManager->reportComment($commentId, $author, $comment, $commentDate);

    if ($reportedComment === false) {
        throw new Exception('Impossible de signaler le commentaire.');
    } else {
        header('Location:index.php?action=postView&id=' . $postId);
    }
}
