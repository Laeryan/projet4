<?php

// Appel du manager nécessaire
require_once('model/Manager.php');


// Classe qui va gérer toutes les fonctions relatives aux billets
class PostManager extends Manager
{
    // Fonction qui récuère tous les billets, et affiche les 5 derniers sur la page d'accueil
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content,
        DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr
        FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    // Fonction qui affiche le billet spécifié sur une page
    public function getPost($postId) {

        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content,
        DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr
        FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    // Fonction pour mettre à jour un billet
    public function updatePost($title, $content, $postId) {

        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?');
        $affectedLines = $req->execute(array($title, $content, $postId));

        return $affectedLines;
    }

    // Fonction pour supprimer un billet
    public function deletePost($postId){

        $db = $this->dbconnect();
        $deletedPost = $db->prepare('DELETE from posts WHERE id = ?');
        $affectedLines = $deletedPost->execute(array($postId));
        
        return $affectedLines;
     }

    // Fonction pour créer un billet
    public function createPost($title, $content) {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUE (?, ?, NOW())');
        $newPost = $req->execute(array($title, $content));

        return $newPost;
     }
}