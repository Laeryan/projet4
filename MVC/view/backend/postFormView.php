<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<h2>Bienvenue dans votre espace d'administration Jean !</h2>
<h3>Créez un nouveau billet</h3>

<form action="index.php?action=<?= $action ?>" method="post">
    <input type="hidden" name="id" value="<?= htmlspecialchars($postId) ?>">
    <input type="text" name="title" placeholder="Saisissez votre titre." value="<?= htmlspecialchars($postTitle) ?>" />
    <textarea name="content" placeholder="Saisissez votre texte."><?= htmlspecialchars($postContent) ?></textarea>
    <input type="submit" value="Enregistrer" />
</form>

<h3>Vous avez maintenant la possibilité de modifier ou supprimer les billets que vous avez créé, directement sur la liste des billets.</h3>

<h4>Liste des commentaires signalés :</h4>

<?php while ($comment = $comments->fetch()) { ?>
    <table>
        <tr>
            <td>Auteur : <?= htmlspecialchars($comment['author']) ?></td>
            <td>Commentaire : <?= htmlspecialchars($comment['comment']) ?></td>
            <td>Numéro du billet : <?= htmlspecialchars($comment['post_id']) ?></td>
        </tr>
    <?php  } ?>
    </table>

    <p><a href="index.php?action=listPosts">Retour à la liste des billets</a></p>

    <p><a href="index.php?action=disconnect">Se déconnecter de la page d'administration</a></p>

    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>