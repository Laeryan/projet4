<!-- Vue de la page d'administration -->

<?php ob_start(); ?>

<h2>Bienvenue dans votre espace d'administration Jean !</h2>
<h3>Créez un nouveau billet</h3>

<form action="index.php?action=<?= $action ?>" method="post">
    <input type="hidden" name="id" value="<?= htmlspecialchars($postId) ?>">
    <input type="text" name="title" placeholder="Saisissez un titre." value="<?= htmlspecialchars($postTitle) ?>" />
    <textarea name="content" placeholder="Saisissez un texte."><?= htmlspecialchars($postContent) ?></textarea>
    <input class="submit" type="submit" value="Enregistrer" />
</form>

<h3>Vous avez maintenant la possibilité de modifier ou supprimer les billets que vous avez créé, directement sur la liste des billets.</h3>

<div id="tableau">
    <h4>Liste des commentaires :</h4>
    <p>Les commentaires signalés apparaisent en haut du tableau.</p>

    <table>
        <thead>
            <tr>
                <th>Auteur</th>
                <th>Commentaire</th>
                <th>Situé</th>
                <th>Signalé</th>
            </tr>
        </thead>
        <?php while ($comment = $comments->fetch()) { ?>
            <tbody>
                <tr>
                    <td><?= htmlspecialchars($comment['author']) ?></td>
                    <td><?= htmlspecialchars($comment['comment']) ?></td>
                    <td><a href="index.php?action=postView&id= <?= $comment['post_id'] ?>">Voir</a></td>
                    <?php if ($comment['report'] == 1) { ?>
                        <td class="report"> Oui</td>
                    <?php } else { ?>
                        <td> Non </td>
                    <?php } ?>
                </tr>
            </tbody>
        <?php  } ?>
    </table>
</div>


<div id="lien_admin">
    <p><a href="index.php?action=listPosts">Retour à la liste des billets</a></p>
    <p><a href="index.php?action=disconnect">Se déconnecter de la page d'administration</a></p>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>