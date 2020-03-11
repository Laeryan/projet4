<?php

require_once('model/Manager.php');

class CommentManager extends Manager
{
    // accède à la bdd pour récupérer les commentaires
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, report, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

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

    // fonction pour modifier un commentaire
    public function updateComment($newComment, $commentId)
    {
        $db = $this->dbconnect();
        $editedComment = $db->prepare('UPDATE comments SET comment = ? WHERE id = ?');
        $editedComment->execute(array($newComment, $commentId));

        return $editedComment;
    }

    // fonction pour supprimer un commentaire
    public function deleteComment($commentId)
    {
       $db = $this->dbconnect();
       $deletedComment = $db->prepare('DELETE from comments WHERE id = ?');
       $deletedComment->execute(array($commentId));
       
       return $deletedComment;
    }

    // fonction pour signaler un commentaire
    public function reportComment($commentId)
    {
        $db = $this->dbConnect();
        $reportedComment = $db->prepare('UPDATE comments SET report = 1 WHERE id = ?');
        $reportedComment->execute(array($commentId));

        return ('Le commentaire a bien été signalé.');
    } 
}