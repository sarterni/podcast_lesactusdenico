<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/HomePage.css?v=<?php echo filemtime('css/HomePage.css'); ?>" />
    <title>Podcast | Les Actus De Nico</title>
</head>

<body>
    <div class="logo">
        <img src="./img/logo.png" alt="logo du site">
        <h1>On Vous En Parle</h1>
        <P>Un podcast dédié aux nouvelles technologies, à l'actualité pour une meilleure compréhension du monde qui nous
            entoure.</P>
    </div>

    <div class="search-bar">
        <input type="text" placeholder="Rechercher un podcast">
        <button>Rechercher</button>

    </div>

    <div class="emissions">

        <img src="img/logo.png" alt="logo du site">
        <h2> Episode 1 : Lundi 5 mai 2025</h2>
        <p>Pour ce premier épisode, on plonge dans l'OSINT, ou le renseignement d'origine sources ouvertes. C'est une
            pratique clé pour la collecte et l'utilisation stratégique d'informations publiques. Aujourd'hui, on explore
            ce domaine fascinant : ses enjeux, ses applications et son rôle dans les enquêtes journalistiques.</p>

        <div class="infos">
            <p class="date"> 5 mai 2025</p>
            <a href="" style="text-decoration:none;">
                <button class="watch">Play on youtube</button>
            </a>
            <audio controls>
                <source src="" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>

    </div>




    <div class="container">
        <div class="a-propos">
            <h2>À propos du podcast</h2>
            <p>Ce podcast est dédié à l'exploration des nouvelles technologies et de l'actualité, visant à offrir une
                meilleure compréhension du monde qui nous entoure. Chaque épisode aborde des sujets variés, allant de la
                cybersécurité aux innovations technologiques, en passant par les enjeux sociétaux liés à ces thèmes.</p>
        </div>

        <div class="equipe">
            <h1 id="h1-equipe">l'équipe</h1>
            <div class="membre">
                <img src="" alt="">
                <h2>Nicolas Sarter</h2>
                <p> réalisateur et présentateur du podcast</p>
            </div>
        </div>


        <div class="contact">
            <h2>Contact</h2>
            <p>Pour toute question ou suggestion, n'hésitez pas à nous contacter à l'adresse suivante :
                <a href="mailto:contact@lesactusdenico.com">contact@lesactusdenico.com</a>
            </p>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Les Actus De Nico. Tous droits réservés.</p>
    </footer>

</body>

</html>