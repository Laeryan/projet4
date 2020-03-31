<!-- Vue de la page d'accueil -->

<?php ob_start(); ?>
<h1 id="title">Jean Forteroche - Ecrivain</h1>

<div id="jforteroche"><img src="public/images/jeanforteroche.jpg" alt="Photo de Jean Forteroche"></div>

<div id="bio">
    <h2>Biographie</h2>
    <p>Né le 27 avril 1963 à Paris, Jean Forteroche a toujours été un passionné de lecture depuis son plus jeune âge. Ses parents, issus de familles modestes,
        ne pouvaient pas lui offrir tous les ouvrages qu'il souhaitait lire, aussi il commenca a faire l'école buissonnière afin de passer plus de temps à la bibliothèque la plus proche.
        C'est à l'âge de 12 ans qu'il commenca à écrire ses propres textes : son premier ouvrage s'intitulant "Désillusion", n'a jamais été publié, bien que déjà très prometteur pour l'écrivain en herbe.
        Malgré son exclusion à l'éducation suite à ses absences répéttées, Jean Forteroche a réussi à s'instruire par lui-même en écumant les bibliothèques et autres librairies.
        Cela ne l'a malheureusement pas aidé dans sa vie professionnelle, car sans diplôme personne ne voulait l'embaucher. C'est en enchaînant les petits boulots que Jean Forteroche parvint
        à créer un petit pécule, lui permettant par la suite de faire publier son premier roman : "Voyage en Enfer", en 1985. Ce roman fut très bien accueilli par le public,
        et lui permis de se faire un nom dans le milieu. Il continua de travailler à mi-temps pour se consacrer encore plus à sa passion, et écrit encore deux romans, dont le célèvre "Aucun retour possible",
        un thriller épatant qui surpris les critiques par son originalité. Jean Forteroche ne vit aujourd'hui que de sa passion, et continuera de nous éblouir par ses écrits.
    </p>
</div>

<div id="book_description">
    <h2>Dernier billet pour l'Alsaka</h2>
    <p>Ce projet tout neuf a été inspiré par les séries télévisées à épisodes. En effet, qui ne s'est jamais languis dans l'attente de la suite de son histoire favorite ?
        Avec "Dernier billet pour l'Alaska", Jean Forteroche a souhaité expérimenter un nouveau système d'écriture et de lecture : tel un podcast, chaque semaine verra la suite
        de l'histoire se défiler sur une page. Chaque épisode correspondra à un chapitre, et suivant les retours obtenus, cet essai sera publié sous forme physique d'ici 2022.
        N'hésitez pas à faire part de vos remarques àJean Forteroche grace aux formulaires prévus à cet effet à la fin de chaque chapitre !
    </p>

    <a class="liens" href="index.php?action=listPosts">Lire "Dernier billet pour l'Alaska"</a>

    <h2>Bibliographie</h2>
    <ul>
        <li>Voyage en enfer - Edition Proust - 1985</li>
        <li>Le train des trahisons - Edition Proust - 1990</li>
        <li>Aucun retour possible - Edition Gallinacé - 1996</li>
        <li>Un meurtre à minuit - Edition Gallinacé - 2001</li>
        <li>Dernier billet pour l'Alaska - Pas encore édité - 2020</li>
    </ul>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>