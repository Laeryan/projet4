<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<h2>Bienvenue dans votre espace d'administration Jean !</h2>
<h3>Créez un nouveau billet</h3>

<form action="index.php?action=<?= $action ?>" method="post">
    <input type="hidden" name="id" value="<?= htmlspecialchars($postId)?>" >
    <input type="text" name="title" placeholder="Saisissez votre titre." value="<?= htmlspecialchars($postTitle)?>"/>
    <textarea name="content" placeholder="Saisissez votre texte."><?= htmlspecialchars($postContent)?></textarea>
    <input type="submit" value="Enregistrer" />
</form>

<p><a href="index.php?action=listPosts">Retour à la liste des billets</a></p>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>