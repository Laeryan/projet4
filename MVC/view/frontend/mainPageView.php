<?php ob_start(); ?>
<h1 id="title">Jean Forteroche - Ecrivain</h1>


<div id="jforteroche"><img src="public/images/jeanforteroche.jpg"></div>

<div id="bio">
<h2>Qui suis-je ?</h2>
<p>Bacon ipsum dolor amet chislic tenderloin pork chop, meatloaf corned beef bresaola beef drumstick.
    Pork belly leberkas filet mignon ham hock jowl, tenderloin pork loin porchetta shankle sausage ham.
    Alcatra ham hamburger sausage, jerky ham hock ribeye frankfurter. Pork belly burgdoggen short loin,
    turducken chuck jerky tri-tip doner boudin shank chicken. Pork belly leberkas alcatra andouille chuck
    pig porchetta, ham t-bone beef tail.</p>

<p>Alcatra prosciutto brisket cow pork belly chuck. Burgdoggen strip steak ground round tenderloin turducken,
    jerky pig biltong pork pork belly cow turkey. Bacon kevin meatball pastrami fatback short loin.
    Tongue jowl biltong filet mignon tail pork loin drumstick cupim shank bacon. Beef ribs porchetta short loin pig, tongue swine rump picanha.
    Pork tail turducken venison, flank capicola short ribs shankle ham hock rump drumstick brisket.</p>
</div>

<div id="book_description">
<h2>Dernier billet pour l'Alsaka</h2>
<p>Bacon ipsum dolor amet chislic tenderloin pork chop, meatloaf corned beef bresaola beef drumstick.
    Pork belly leberkas filet mignon ham hock jowl, tenderloin pork loin porchetta shankle sausage ham.
    Alcatra ham hamburger sausage, jerky ham hock ribeye frankfurter. Pork belly burgdoggen short loin,
    turducken chuck jerky tri-tip doner boudin shank chicken. Pork belly leberkas alcatra andouille chuck
    pig porchetta, ham t-bone beef tail.</p>
</div>

<a href="index.php?action=listPosts">Lire "Dernier billet pour l'Alaska"</a>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>