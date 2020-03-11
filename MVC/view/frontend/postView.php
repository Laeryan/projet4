<?php $title = 'Mon blog'; ?>
    
    <?php ob_start(); ?>
        <h1>Billet simple pour l'Alaska</h1>
        <p><a href="index.php?action=listPosts">Retour à la liste des billets</a></p>
    
        <div class="news">
            <h3>
                <?= htmlspecialchars($post['title']) ?>
                <em>le <?= htmlspecialchars($post['creation_date_fr']) ?></em>
            </h3>
            
            <p>
                <?= nl2br(htmlspecialchars($post['content'])) ?>
            </p>
        </div>

        <h2>Commentaires</h2>

        <form action="index.php?action=addComment&amp;id=<?= htmlspecialchars($post['id']) ?>" method="post">
            <div>
                <label for="author">Auteur</label><br />
                <input type="text" id="author" name="author" />
            </div>
            <div>
                <label for="comment">Commentaire</label><br />
                <textarea id="comment" name="comment"></textarea>
            </div>
            <div>
                <input type="submit" />
            </div>
        </form>

        <?php
        while ($comment = $comments->fetch())
        {
        ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        <form action="index.php?action=deleteComment&amp;id=<?= htmlspecialchars($comment['id'])?>" method="post">
        <input type="submit" value="Effacer"/>
        </form>
        <form action="index.php?action=updateComment&amp;id=<?= htmlspecialchars($comment['id'])?>" method="post">
        <input type="submit" value="Modifier"/>
        </form>
        <form action="index.php?action=reportComment&amp;id=<?= htmlspecialchars($comment['id'])?>" method="post">
        <input type="submit" value="Signaler"/>
        </form>
        <?php
        }
        ?>
        <?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>