<?php
require('controller/frontend.php');
require('controller/backend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
                listPosts();
        } elseif ($_GET['action'] == 'post') {
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    post();
                } else {
                    throw new Exception('Erreur : aucun identifiant de billet envoyé.');
                }
        } elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0 ) {
                if(!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                } else {
                    throw new Exception('Erreur : tous les champs ne sont pas remplis !');
                }
            } else {
                throw new Exception('Erreur : aucun identifiant de billet envoyé.');
            }
        } elseif ($_GET['action'] == 'deleteComment') {
            deleteComment($_GET['id']);
        } /* elseif ($_GET['action'] == 'updateComment') {
            updateComment($_POST['newComment'], $_GET['id'], $_GET['postID']);
        } elseif ($_GET['action'] == 'reportComment') {
            reportComment($_GET['id']); 
        } */ elseif ($_GET['action'] == 'displayPostForm') {
            displayPostForm();
        } elseif ($_GET['action'] == 'postView') {
            postView();
        } elseif ($_GET['action'] == 'updatePost') {
            echo 'à renseigner';
        } elseif ($_GET['action'] == 'deletePost') {
            deletePost($_GET['id']);
        }
    } else {
        listPosts();
    } 
} catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/errorView.php');
}
