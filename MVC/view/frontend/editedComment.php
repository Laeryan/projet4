<?php $title = 'Mon blog'; ?>

    <?php ob_start(); ?>

    <form action="index.php?action=editComment&amp;id=" method="post">
            <div>
                <label for="author">Auteur</label><br />
                <input type="text" name="author" id="author" value="<?=htmlspecialchars($comment['author']);?>">
            </div>
            <div>
                <label for="comment">Commentaire</label><br />
                <textarea id="comment" name="comment" value="<?=htmlspecialchars($comment['comment']);?>"></textarea>
            </div>
            <div>
                <input type="submit" />
            </div>
        </form>

    <?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>