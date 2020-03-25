<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
              
        <h2>Derniers billets du blog :</h2>
        <?php
        while ($post = $posts->fetch())
        {
        ?>

        <div class="news">
            <h3>
                <?= htmlspecialchars($post['title']); ?> <!-- = < ?php echo naninaninani ?> -->
                <em>le <?= $post['creation_date_fr']; ?></em>
            </h3>

            <?= nl2br(htmlspecialchars($post['content']));
            ?><br />
            <em><a href="index.php?action=postView&id=<?= $post['id']?>">Voir le billet</a></em>
        </div>
        <form action="index.php?action=deletePost&amp;id=<?= htmlspecialchars($post['id'])?>" method="post">
        <input type="submit" value="Effacer"/>
        </form>
        <form action="index.php?action=updatePostForm&amp;id=<?= htmlspecialchars($post['id'])?>" method="post">
        <input type="submit" value="Modifier"/>
        </form>
<?php
        }
$posts->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
 