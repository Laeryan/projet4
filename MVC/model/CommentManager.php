<?php

require_once('model/Manager.php');

class CommentManager extends Manager
{
    // accède à la bdd pour récupérer les commentaires pour chaque post
    public function getCommentsByPostId($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, report, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    // Fonction qui permet de récupérer tous les commentaires 
    public function getReportedComments() {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT * FROM comments WHERE report = 1 ORDER BY comment_date DESC');
        $comments->execute(array());

        return $comments;
    }


    // permet de créer un commentaire
    public function addComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    // fonction pour supprimer un commentaire
    public function deleteComment($commentId)
    {
       $db = $this->dbconnect();
       $deletedComment = $db->prepare('DELETE from comments WHERE id = ?');
       $affectedLines = $deletedComment->execute(array($commentId));
       
       return $affectedLines;
    }

    // fonction pour signaler un commentaire
    public function reportComment($commentId)
    {
        $db = $this->dbConnect();
        $reportedComment = $db->prepare('UPDATE comments SET report = 1 WHERE id = ?');
        $reportedComment->execute(array($commentId));
    } 
}