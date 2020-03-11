<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

        <h1>Jean Forteroche - Ecrivain</h1>
        
        <textarea>
            Welcome to TinyMCE!
        </textarea>
        <script>
            tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            });
        </script>

        <p>Derniers billets du blog :</p>
        <?php
        while ($post = $posts->fetch())
        {
        ?>

        <div class="news">
            <h3>
                <?= htmlspecialchars($post['title']); ?> <!-- = < ?php echo naninaninani ?> -->
                <em>le <?= $post['creation_date_fr']; ?></em>
            </h3>
            
            <p>

            <?= nl2br(htmlspecialchars($post['content']));
            ?><br />
            <em><a href="index.php?action=postView&id=<?= $post['id']?>">Voir le billet</a></em>
            </p>
        </div>
        <form action="index.php?action=deletePost&amp;id=<?= htmlspecialchars($post['id'])?>" method="post">
        <input type="submit" value="Effacer"/>
        </form>
        <form action="index.php?action=updatePost&amp;id=<?= htmlspecialchars($post['id'])?>" method="post">
        <input type="submit" value="Modifier"/>
        </form>
<?php
        }
$posts->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
 