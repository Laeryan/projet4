<?php ob_start(); ?>

<h2>Me contacter</h2>
<p>Afin de prendre contact avec moi, veuillez remplir le formulaire ci-dessous :</p>

<form action="index.php?action=" method="post">  <!-- rajouter une action pour l'envoi du formulaire -->
<input type="email" placeholder="Votre e-mail">
<input type="text" placeholder="Titre">
<input type="text" placeholder="Votre message">
<input type="submit" value="Envoyer le message"> 
</form>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>