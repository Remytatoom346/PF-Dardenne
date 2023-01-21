<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rémy Dardenne | Tatoom</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <header>
        <?php include 'header.php' ?>
    </header>
    <!-- DEBUT MAIN -->
    <main>
        <div class="intro">
            <p>
                Bienvenue sur mon Port-folio :
                <br class='main_text'>
                <br class='main_text'>
                Vous pouvez retrouver toutes mes réalisations
                <br class='main_text'>
                Mes photographies, Mes créations graphiques, Mes sites web, et mes autres projets pro ou personel
                <br class='main_text'>
                <br class='main_text'>
                Tatoom c'est quoi ? :
                <br class='main_text'>
                C'est mon pseudo, je m'en sert comme nom pour mes créations
            </p>
        </div>

        <h2 class="titre_card">À Propos</h2>
        <a href="a_propos.php">
            <img src="../resources/PP.jpg" alt="" srcset="" class="img_propos">
        </a>

        <h2 class="titre_card">Mon Travail</h2>
        <a href="travaux.php">
            <div class="card_index"></div>
        </a>


        <h2 class="titre_card">Mes coordonées</h2>
        <div class="intro">
            <p>Email : remydardennevansse@gmail.com
                <br class='main_text'>Tél : 06 95 25 96 34
            </p>
        </div>
        <h2 class="titre_card">Mes résaux</h2>
        <div class="intro">
            <p class='reseaux_text'> <img src="../resources/SVG/insta.svg" class='social'>@tatoom346</p>
            <p class='reseaux_text'> <img src="../resources/SVG/linkdin.svg" class='social'>Rémy Dardenne</p>
            <p class='reseaux_text'> <img src="../resources/SVG/github.svg" class='social'>Remytatoom346</p>
        </div>
    </main>
    <!-- FIN MAIN -->
    <footer>
        <?php include 'footer.php' ?>
    </footer>

</body>
<script src="../Js/main.js"></script>

</html>