<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<form action="index.php?action=<?= $action ?>" method="POST">
<input type="text" value="<?= $postTitle ?>"/> 
<textarea><?= $postContent ?></textarea>
<input type="submit" value="Enregistrer"/>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>