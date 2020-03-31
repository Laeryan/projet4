<!-- Vue de la page contenant la liste des billets -->

<?php ob_start(); ?>
              
        <h2>Derniers billets du blog :</h2>
        <?php
        while ($post = $posts->fetch())
        {
        ?>

        <div class="newPost">
            <h3>
                <?= htmlspecialchars($post['title']); ?> <!-- = < ?php echo naninaninani ?> -->
                <em>le <?= $post['creation_date_fr']; ?></em>
            </h3>

            <?php 
                $allowedTags='<p><strong><em><u><h1><h2><h3><h4><h5><h6><img><li><ol><ul><span><div><br><ins><del>';
                $postContent = strip_tags(stripslashes($post['content']),$allowedTags); 
                echo $postContent;
            ?>
        </div>
        <a class="liens" href="index.php?action=postView&id=<?= $post['id']?>">Voir le billet</a>
            <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) { ?>
        <form action="index.php?action=deletePost&amp;id=<?= htmlspecialchars($post['id'])?>" method="post">
        <input class="submit"type="submit" value="Effacer"/>
        </form>
        <form action="index.php?action=updatePostForm&amp;id=<?= htmlspecialchars($post['id'])?>" method="post">
        <input class="submit"type="submit" value="Modifier"/>
        </form>
            <?php } ?>

<?php
        }
$posts->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
 