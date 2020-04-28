<!DOCTYPE html>
<!-- Template général du site web -->

<html lang="fr">

<head>
    <!-- Open Graph -->

    <meta property="og:title" content="Dernier billet pour l'Alaska" />
    <meta property="og:type" content="Site web" />
    <meta property="og:url" content="#" />
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jean Forteroche - Ecrivain</title>
    <link rel="icon" href="public/images/feather.png" />
    <link rel='stylesheet' type='text/css' href='public/css/style.css' />
    <link rel='stylesheet' media="screen and (max-width: 479px)" type='text/css' href='public/css/media.css' />
    <link rel='stylesheet' media="screen and (max-width: 959px)" type='text/css' href='public/css/media.css' />
    <link rel='stylesheet' media="screen and (max-width: 1280px)" type='text/css' href='public/css/media.css' />



</head>

<body>
    <header> <?php include('menu.php') ?></header>

    <section id="content"> <?= $content ?></section>
    <footer>
        <ul>
            <li>Ma page Facebook</li>
            <li>Mes amis</li>
            <li>Politique de confidentialité</li>
        </ul>
    </footer>
</body>

</html>