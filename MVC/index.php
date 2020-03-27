<?php
session_start();
$id_session = session_id();

/*
if($id_session){
    echo 'ID de session (récupéré via session_id()) : <br>'
    .$id_session. '<br>';
}
echo '<br><br>';
if(isset($_COOKIE['PHPSESSID'])){
    echo 'ID de session (récupéré via $_COOKIE) : <br>'
    .$_COOKIE['PHPSESSID'];
}
*/

require('controller/frontend.php');
require('controller/backend.php');


try {
    if (isset($_GET['action'])) {

        // Actions du menu

        if ($_GET['action'] == 'mainPage') {
            mainPage();
        } elseif ($_GET['action'] == 'contact') {
            contact();
        } elseif ($_GET['action'] == 'mailContact') {
            if (isset($_POST['submit'])) {
                if (empty($_POST['email']) || empty($_POST['title']) || empty($_POST['message'])) {
                    echo ('Veuillez remplir tous les champs.');
                } else {
                    mailContact($_POST['email'], $_POST['title'], $_POST['message']);
                }
            }
        } elseif ($_GET['action'] == 'listPosts') {
            listPosts();
        }

        // Gestion des commentaires 

        elseif ($_GET['action'] == 'addComment') {
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
        }

        // Gestion des billets

        elseif ($_GET['action'] == 'postView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                postView();
            } else {
                throw new Exception('Erreur : aucun identifiant de billet envoyé.');
            }
        } elseif ($_GET['action'] == 'displayPostForm') {
            createPostForm();
        } elseif ($_GET['action'] == 'createPost') {
            createPost($_POST['title'], $_POST['content']);
        } elseif ($_GET['action'] == 'updatePostForm') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                updatePostForm($_GET['id']);
            } else {
                throw new Exception('Erreur : aucun identifiant de billet envoyé.');
            }
        } elseif ($_GET['action'] == 'updatePost') {
            updatePost($_POST['title'], $_POST['content'], $_POST['id']);
        } elseif ($_GET['action'] == 'deletePost') {
            deletePost($_GET['id']);
        }

        // Connexion aux sessions

        elseif ($_GET['action'] == 'displayLogin') {
            displayLogin();
        } elseif ($_GET['action'] == 'login') {
            login();
        } elseif ($_GET['action'] == 'disconnect') {
            disconnect();
        } else {
            mainPage();
        }
    } else {
        mainPage();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/errorView.php');
}
