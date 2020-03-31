<!-- Vue de la page affichant un seul billet -->

<?php ob_start(); ?>
<h2>Billet simple pour l'Alaska</h2>
<a class="liens" href="index.php?action=listPosts">Retour à la liste des billets</a>

<div class="newPost">
    <h3>
        <?= htmlspecialchars($post['title']) ?>
        <em>le <?= htmlspecialchars($post['creation_date_fr']) ?></em>
    </h3>
    <?php
    $allowedTags = '<p><strong><em><u><h1><h2><h3><h4><h5><h6><img><li><ol><ul><span><div><br><ins><del>';
    $postContent = strip_tags(stripslashes($post['content']), $allowedTags);
    echo $postContent;
    ?>
</div>

<h2>Commentaires</h2>

<form action="index.php?action=addComment&amp;id=<?= htmlspecialchars($post['id']) ?>" method="post">
    <div>
        <label for="author"></label><br />
        <input type="text" id="author" name="author" placeholder="Auteur" />
    </div>
    <div>
        <label for="comment"></label><br />
        <textarea id="comment" name="comment" placeholder="Commentaire"></textarea>
    </div>
    <div>
        <input class="submit" type="submit" />
    </div>
</form>
<h2>Liste des commentaires :</h2>
<?php while ($comment = $comments->fetch()) { ?>
    <div id="commentaires">
        <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
        <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
    </div>
    <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) { ?>
        <form action="index.php?action=deleteComment&amp;id=<?= htmlspecialchars($comment['id']) . '&postId=' . htmlspecialchars($post['id']) ?>" method="post">
            <input class="submit" type="submit" value="Effacer" />
        </form>
    <?php } ?>

    <?php if ($comment['report'] == 0) : ?>
        <form action="index.php?action=reportComment&amp;id=<?= htmlspecialchars($comment['id']) . '&postId=' . htmlspecialchars($post['id']) ?>" method="post">
            <input class="submit" type="submit" value="Signaler" />
        </form>
    <?php endif; ?>
<?php
}
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>