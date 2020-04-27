<!DOCTYPE html>
<!-- Template pour la page d'administration avec intégration de TinyMCE -->

<html lang="fr">

<head>
    <!-- Open Graph -->

    <meta property="og:title" content="Dernier billet pour l'Alaska" />
    <meta property="og:type" content="Site web" />
    <meta property="og:url" content="http://jeanforteroche-ecrivain.usaginoke.fr/" />
    <meta property="og:image" content="public/images/jeanforteroche.jpg" />
    <meta property="og:description" content="Lisez le dernier roman de Jean Forteroche : Dernier billet pour l'Alaska." />

    <meta name="twitter:card" content="Dernier billet pour l'Alaska" />
    <meta name="twitter:site" content="@JForteroche" />
    <meta name="twitter:title" content="Dernier billet pour l'Alaska" />
    <meta name="twitter:description" content="Lisez le dernier roman de Jean Forteroche : Dernier billet pour l'Alaska." />
    <meta name="twitter:creator" content="@JForteroche" />
    <meta name="twitter:image" content="public/images/jeanforteroche.jpg" />

    <!-- fin-->

    <meta charset="utf-8" />
    <title>Un billet pour l'Alaska</title>
    <link rel="icon" href="public/images/feather.png" />
    <link rel='stylesheet' type='text/css' href='public/css/style.css' />
    <script src="https://cdn.tiny.cloud/1/pefo8x535mnq9k6am9ermwm3q0r7vln08vd8ojod3htjkcz3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>
    <header>
        <?php include('view/frontend/menu.php') ?>
    </header>

    <section id="content">
        <?= $content ?>
    </section>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: '',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            forced_root_block: false,
            force_br_newlines: true,
            force_p_newlines: false,
        });
    </script>

    <script type="text/javascript" src="public/js/alerts.js"></script>
</body>

</html>