<!-- Template général du sote web -->

<!DOCTYPE html>
<html>

<head>    
    <!-- Open Graph -->

	<meta property="og:title" content="Dernier billetp our l'Alaska"/>
	<meta property="og:type" content="Site web"/>
	<meta property="og:url" content="#"/>
	<meta property="og:image" content="public/images/jeanforteroche.jpg"/>
	<meta property="og:description" content="Lisez le dernier roman de Jean Forteroche : Dernier billetp our l'Alaska."/>

	<meta name="twitter:card" content="Dernier billet pour l'Alaska"/>
	<meta name="twitter:site" content="@JForteroche"/>
	<meta name="twitter:title" content="Dernier billet pour l'Alaska"/>
	<meta name="twitter:description" content="Lisez le dernier roman de Jean Forteroche : Dernier billet pour l'Alaska."/>
	<meta name="twitter:creator" content="@JForteroche"/>
    <meta name="twitter:image" content="public/images/jeanforteroche.jpg"/>
    
    <!-- fin-->

    <meta charset="utf-8" />
    <title>Jean Forteroche - Ecrivain</title>
    <link rel="icon" href="public/images/feather.png" />
    <link rel='stylesheet' type='text/css' href='public/css/style.css'/>


</head>

<body>
    <header> <?php include('menu.php') ?></header>

    <section id="content"> <?= $content ?></section>

    <footer> <?php include('footer.php') ?></footer>
</body>

</html>