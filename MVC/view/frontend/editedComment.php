<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Jean Forteroche - Ecrivain</h1>
<p><a href="index.php?action=listPosts">Retour à la liste des billets</a></p>
 
 
<h2>Editer le commentaire</h2>
 
<form action="index.php?action=addComment&amp;id=<?= htmlspecialchars($post['id']) ?>" method="post">
        <label for="newComment">Nouveau commentaire</label><br />
        <textarea id="newComment" name="newComment" value = ""></textarea>
    </div>
    <div>
        <input type="Submit" />
    </div>
</form>
<?php
$content = ob_get_clean(); ?>
 
<?php require('template.php'); ?>