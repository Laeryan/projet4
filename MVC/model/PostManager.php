<?php

require_once('model/Manager.php');

class PostManager extends Manager
{
    // affiche les 5 derniers billets sur la page d'accueil
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content,
        DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr
        FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    // affiche 1 billet par page 
    public function getPost($postId) {

        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content,
        DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr
        FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    // fonction pour mettre à jour un billet
    public function updatePost($title, $content, $date) {

        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE posts SET title = ?, content = ?, creation_date = NOW() WHERE id = ?');
        $affectedLines = $req->execute(array($title, $content, $date));

        return $affectedLines;
    }

    // fonction pour supprimer un billet
    public function deletePost($postId){

        $db = $this->dbconnect();
        $deletedPost = $db->prepare('DELETE from posts WHERE id = ?');
        $deletedComments = $db->prepare('DELETE from comments WHERE post_id = ?');
        $deletedComments->execute(array($postId));
        $affectedLines = $deletedPost->execute(array($postId));
        
        return $affectedLines;
     }

    // fonction pour créer un billet
    public function createPost($title, $content) {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUE (?, ?, NOW())');
        $newPost = $req->execute(array($title, $content));

        return $newPost;
     }
}