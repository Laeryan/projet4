<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<form action="index.php?action=displayPostForm" method="post">
    <input type="submit" value="Créer un nouveau billet">
</form>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>