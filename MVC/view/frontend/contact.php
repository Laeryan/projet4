<?php ob_start(); ?>

<h2>Me contacter</h2>
<p>Afin de prendre contact avec moi, veuillez remplir le formulaire ci-dessous :</p>

<form action="index.php?action=mailContact" method="post">
<input type="email" name="email" placeholder="Votre e-mail">
<input type="text" name="title" placeholder="Titre">
<input type="text" name="message" placeholder="Votre message">
<input type="submit" name="submit" value="Envoyer le message"> 
</form>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>