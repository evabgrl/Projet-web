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
        <div style="float:left"><a href="Immobilier.php"><img src="images/logo web.png" width="150px"></a></div>
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
    

    <nav class ="Introduction">
        <div style="float:right"><img src="images/immo.jpg" width = 400px ></div>
        <p class ="titre"><b>Omnes Education vous souhaite la bienvenue !</b></p>
        <p id = "intro">Créé en 2022, Omnes Immobilier est une agence qui se veut simple d'utilisation pour vous faciliter lors de vos recherches, 
            car nous savons à quel point c'est important de se sentir à l'aise pour prendre la décision de visiter un bien (et plus si affinité).
            Sur ce site vous trouverez le bien de vos rêves, nous en sommes certains. 
            Que vous cherchiez une maison citadine, familiale, pour étudiant 
            ou encore une maison de vacances, nous aurons de quoi vous satisfaire dans notre agence.</p>
        <p>Nous travaillons avec des outils technologiques vous permettant de faire des recherches avancées en
            fonction de vos besoins. Cela crée un réel lien entre vous et nous de part ce réseaux et les
            technologies qui nous entoure. Ainsi, nous serons ravis d'avoir votre retour d'expérience sur vos recherches
            d'habitation avec nous.
        </p>
        <p classe = "titre"><b>Bonne visite !</p>
    </nav>
    <nav class ="Evenement">
        <p class = "titre"><b>L'événement de la semaine</b></p>
        <p>Nous vous proposons le bien le plus intéressant de la semaine.</p>
        <a href ="Maisonfamiliale.html">Maison familiale</a>
        <br><img src="images/maisonfam1.webp" width="500px"></br>
        <p>Cocon familiale d'une superficie de 190m² pour un total de 6 pièces. En plein coeur de Saint-Cyr-au-Mont-D'Or, laissez vous séduire par sa piscine et sa terrasse aménagée.</p>
    </nav>

    <nav class="Bulletin">
        <p class = "titre"><b>Le bulletin de l'immobilier</b></p>
        <p></p>

        <section class="carousel">
            <ul class="carousel-items">
                <?php $biens = get_biens_immobiliers_by_id_cat(4);?>
                <?php foreach($biens as $bien) : ?>

                    <li class="carousel-item">
                        <div class="card">
                            <h2 class="card-title"><?php echo $bien['Titre']; ?></h2>
                            <img src="<?php echo $bien['Image']; ?>" width="300" heigth ="200"/>
                            <div class="card-content">
                                <?php echo $bien['Descriptions']; ?>
                                <a href="maison-detail.php?id=<?php echo $bien['Numero']; ?>" class="button">En savoir plus</a>
                            </div>
                        </div>
                    </li>

                <?php endforeach; ?>
            </ul>
        
    </nav>



    <footer>
        <div style="float:right"><img src="images/PLAN.png" width = 275px ></div>
        <p class = titre-footer><b>Nous contacter</b></p>
        
        <p>25 rue de l'université</p>
        <p>69007 Lyon</p>
        <p>+336 52 49 91 36</p>
        <p>contact@omnesimmobilier.com</p>
        
    </footer>

</body>
