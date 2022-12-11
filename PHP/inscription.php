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
    
    <form method="post" action="creation.php">
        Email : <input type="email" name="CourrielClient" placeholder="Entrer votre Email" class = "inscription"/><br />
        Mdp : <input type="text" name="MotDePasse" placeholder="Entrer votre mot de passe" class = "inscription"/><br />
        Name : <input type="text" name="NomPrenomClient" placeholder="Entrez votre nom et prénom" class = "inscription"/><br />
        Adresse : <input type="text" name="AdresseClient" placeholder="Entrez votre adresse postale"class = "inscription"/><br />
        Pays : <input type="text" name="PaysClient" placeholder="Entrer votre pays de résidence" class = "inscription" /><br />
        Codepostal : <input type="text" name="CodePostalClient" placeholder="Entrer votre code postal" class = "inscription"/><br />
        Ville : <input type="text" name="VilleClient" placeholder="Entrer votre ville de résidence" class = "inscription"/><br />
        Numero : <input type="text" name="NumeroTelephoneClient" placeholder="Entrer votre numéro de téléphone" class = "inscription"/><br />
        Financier : <input type="text" name="InfoFinancieres" placeholder="Entrer vos informations financières" class = "inscription"/><br />
        <input type="submit" value="Submit" class = "submit" />
    </form>
</body>
</html>
