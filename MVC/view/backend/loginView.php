<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<h2>Connectez-vous pour administrer le site</h2>

<form action="index.php?action=login" method="post">
    <input type="text" name="username" placeholder="Nom d'utilisateur">
    <input type="password" name="password" placeholder="Mot de passe."/>
    <input type="submit" value="Se connecter" />
</form>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>