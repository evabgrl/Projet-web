<?php
    require 'functions/database.php';
    require_once 'functions/biens.php';
    

    $biens = get_biens_immobiliers();

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
        <div style="float:left"><a href="Immobilier.php"><img src="./images/logo web.png" width="150px"></a></div>
        <h1>Omnes Immobilier</h1>
        
    </header>
    <nav class ="barre">
        <nav class="menu-bouton">
            <a href = "Immobilier.php">Accueil</a>
     
        </nav>
        <nav class ="menu-bouton">
            <a href = "Toutparcourir.php">Tout parcourir</a>
        </nav>
        <nav class ="menu-bouton">
            <a href = "Recherche.php">Recherche</a>
        </nav>
        <nav class ="menu-bouton">
            <a href = "Rendez-vous.php">Rendez-vous</a>
        </nav>
        <nav class ="menu-bouton">
            <a href = "Votrecompte.php">Votre compte</a>
        </nav>
    </nav>

    <nav>
        
        <p class = "titre"><b>Maison familiale</b></p>

        <section class="carousel">
            <ul class="carousel-items">
                <?php $biens = get_biens_immobiliers_by_id_cat(1);?>
                <?php foreach($biens as $bien) : ?>

                    <li class="carousel-item">
                        <div class="card">
                            <h2 class="card-title"><?php echo $bien['Titre']; ?></h2>
                            <img src="<?php echo $bien['Image']; ?>" width="300" heigth="200"/>
                            <div class="card-content">
                                <?php echo $bien['Descriptions']; ?>
                                <a href="maison-detail.php?id=<?php echo $bien['Numero']; ?>" class="button">En savoir plus</a>
                            </div>
                        </div>
                    </li>

                <?php endforeach; ?>
            </ul>
        
    </nav>


    <nav>
        <p class = "titre"><b>Appartement citadin</b></p>


        
        <section class="carousel">
            <ul class="carousel-items">
            <?php $biens = get_biens_immobiliers_by_id_cat(2);?>
            <?php foreach($biens as $bien) : ?>
                    <li class="carousel-item">
                        <div class="card">
                            
                            <h2 class="card-title"><?php echo $bien['Titre']; ?></h2>
                            <img src="<?php echo $bien['Image']; ?>" width="300" heigth="200"/>
                            <div class="card-content">
                                <?php echo $bien['Descriptions']; ?>
                                <a href="maison-detail.php?id=<?php echo $bien['Numero']; ?>" class="button">En savoir plus</a>
                            
                        </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
    </nav>


    <nav>
        <p class = "titre"><b>L'insolite de l'immobilier</b></p>


        
        <section class="carousel">
            <ul class="carousel-items">
            <?php $biens = get_biens_immobiliers_by_id_cat(3);?>
                <?php foreach($biens as $bien) : ?>
                    <li class="carousel-item">
                        <div class="card">
                            <h2 class="card-title"><?php echo $bien['Titre']; ?></h2>
                            <img src="<?php echo $bien['Image']; ?>" width="300" heigth="200"/>
                            <div class="card-content">
                                <?php echo $bien['Descriptions']; ?>
                                <a href="maison-detail.php?id=<?php echo $bien['Numero']; ?>" class="button">En savoir plus</a>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
    </nav>


</body>
