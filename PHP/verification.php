<?php
    require 'functions/database.php';

?>
<?php session_start();
    if(isset($_POST['NomPrenomClient']) && isset($_POST['MotDePasse'])){
        $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['NomPrenomClient'])); 
        $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['MotDePasse']));
 
        if($username !== "" && $password !== ""){
            $requete = "SELECT count(*) FROM client where 
            NomPrenomClient = '".$username."' and MotDePasse = '".$password."' ";
            $exec_requete = mysqli_query($db,$requete);
            $reponse = mysqli_fetch_array($exec_requete);
            $count = $reponse['count(*)'];
            if($count!=0) {
                $_SESSION['NomPrenomClient'] = $username;
                header('Location: Immobilier.php');
            }
            else{
                header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
            }
        }
        else{
            header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
        }
    }
    else{
        header('Location: inscription.php');
    }
    mysqli_close($db); // fermer la connexion
?>
