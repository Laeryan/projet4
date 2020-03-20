<?php

require('controller/frontend.php');
require('controller/backend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        } elseif ($_GET['action'] == 'postView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                postView();
            } else {
                throw new Exception('Erreur : aucun identifiant de billet envoyé.');
            }
        } elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                } else {
                    throw new Exception('Erreur : tous les champs ne sont pas remplis !');
                }
            } else {
                throw new Exception('Erreur : aucun identifiant de billet envoyé.');
            }
        } elseif ($_GET['action'] == 'deleteComment') {
            deleteComment($_GET['id'], $_GET['postId']);
        } elseif ($_GET['action'] == 'reportComment') {
            reportComment($_GET['id'], $_GET['postId']);
        } elseif ($_GET['action'] == 'displayPostForm') {
            createPostForm();
        } elseif ($_GET['action'] == 'createPost') {
            createPost($_POST['title'], $_POST['content']);
        } elseif ($_GET['action'] == 'updatePostForm') {
            if(isset($_GET['id']) && $_GET['id'] > 0) {
                updatePostForm($_GET['id']);
            } else {
                throw new Exception('Erreur : aucun identifiant de billet envoyé.');
            }            
        } elseif ($_GET['action'] == 'updatePost') {
            updatePost($_POST['title'], $_POST['content'], $_POST['id']);
        } elseif ($_GET['action'] == 'deletePost') {
            deletePost($_GET['id']);
        }
    } else {
        listPosts();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/errorView.php');
}
