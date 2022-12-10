<?php
    require 'functions/database.php';
    require_once 'functions/biens.php';
    

    $agents=get_agents();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Immobilier.css">
    <title>OMNES Immobilier</title>


<body>
    <header>
        <h1>Omnes Immobilier</h1>
        <a href="Immobilier.html"><img src="images/logo web.png" width="100px"></a>
    </header>
    <nav class ="barre">
        <nav class="menu-bouton">
            <a href = "Accueil.html">Accueil</a>
     
        </nav>
        <nav class ="menu-bouton">
            <a href = "Toutparcourir.html">Tout parcourir</a>
        </nav>
        <nav class ="menu-bouton">
            <a href = "Recherche.html">Recherche</a>
        </nav>
        <nav class ="menu-bouton">
            <a href = "Rendez-vous.html">Rendez-vous</a>
        </nav>
        <nav class ="menu-bouton">
            <a href = "Votrecompte.html">Votre compte</a>
        </nav>
    </nav>

    <p class ="titre-maison">Studio étudiant</p>
    <div class="slider-container">
        <div class="menu">
            <label for="slide-dot-1"></label>
            <label for="slide-dot-2"></label>
            <label for="slide-dot-3"></label>
        </div>

        <input class="slide-input" id="slide-dot-1" type="radio" name="slides" checked>
        <img class="slide-img" src="./images/Maison1.jpg">

        <input class="slide-input" id="slide-dot-2" type="radio" name="slides">
        <img class="slide-img" src="./images/Maison1_2.jpg">

        <input class="slide-input" id="slide-dot-3" type="radio" name="slides">
        <img class="slide-img" src="./images/Maison1_3.jpg">

    </div>
    <p class = "droite">Surface : 16m²</p>
    <p class = "droite">Prix : 75000€</p>
    <p class = "droite">Adresse : 26 rue des papillons, 69003 Lyon</p>
    <p>Petit studio à deux pas d'OMNES, idéal pour les étudiants. En plein centre de Lyon, vous pourrez aussi bien faire la fête que
        suivre vos études sans problème. Muni d'une kitchenette et d'une petite salle de bain, vous pourrez être autonome dans votre studio.
        Notez qu'il possède également une vue sur le Rhône et ses quais. Laissez vous séduire par son charme et son omptimisation d'espace.
    </p>


    <p class = "titre"><b>Nos agents immobiliers</b></p>
    <section class="carousel">
            <ul class="carousel-items">
                <?php $agent = get_agents();?>
                <?php foreach($agents as $agent) : ?>

                    <li class="carousel-item">
                        <div class="card">
                            <h2 class="card-title"><?php echo $agent['NomAgent']; ?><?php echo $agent['PrenomAgent']; ?></h2>
                            <img src="<?php echo $agent['Photo']; ?>" width="150" height="200"/>
                            <div class="card-content">
                                <a href="#demo"><?php echo $agent['NomAgent']; ?><?php echo $agent['PrenomAgent']; ?></a>
                                <div id="demo" class="modal">
                                    <div class="modal_content">
                                        <p class = "titre"><?php echo $agent['NomAgent']; ?><?php echo $agent['PrenomAgent']; ?></p>
                                
                                        <p><?php echo $agent['Disponibilite']; ?></p>
                                        <p><?php echo $agent['CourrielAgent']; ?></p>
                                        <a href="#" class ="modal_close">&times;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                <?php endforeach; ?>
            </ul>

</body>
    
