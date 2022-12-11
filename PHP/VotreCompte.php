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
    
    <div id="container" class="compte">
        <!-- zone de connexion -->
 
        <form action="verification.php" method="POST">
            <h1 class = "center">Connexion</h1>
 
            <p class ="center"><b>Nom d'utilisateur</b></p>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <p class = "center"><b>Mot de passe</b></p>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='LOGIN' >
            <?php if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>
</html>
