<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Formulaire en PHP/MySQL</title>
</head>


<?php
  // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //identifiants mysql
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "projet_web";
    
    $email = $_POST["CourrielClient"];
    $mdp = $_POST["MotDePasse"];
    $name = $_POST["NomPrenomClient"]; 
    $adresse = $_POST["AdresseClient"];
    $pays = $_POST["PaysClient"];
    $code = $_POST["CodePostalClient"];
    $ville = $_POST["VilleClient"];
    $numero = $_POST["NumeroTelephoneClient"];
    $financier = $_POST["InfoFinancieres"];

   
    if (!isset($email)){
        die("S'il vous plaît entrez votre adresse e-mail");
    } 
    if (!isset($mdp)){
      die("S'il vous plaît entrez votre mot de passe");
    }
    if (!isset($name)){
        die("S'il vous plaît entrez votre nom et prénom");
    }
    if (!isset($adresse)){
        die("S'il vous plaît entrez votre adresse");
    }
    if (!isset($pays)){
        die("S'il vous plaît entrez votre pays");
    }
    if (!isset($code)){
        die("S'il vous plaît entrez votre code postal");
    }
    if (!isset($ville)){
        die("S'il vous plaît entrez votre ville");
    }
    if (!isset($numero)){
        die("S'il vous plaît entrez votre numéro de téléphone");
    }
    if (!isset($financier)){
        die("S'il vous plaît entrez vos informations financières");
    }




    //Ouvrir une nouvelle connexion au serveur MySQL
    $mysqli = new mysqli($host, $username, $password, $database);
    
    //Afficher toute erreur de connexion
    if ($mysqli->connect_error) {
      die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }  
    
    //préparer la requête d'insertion SQL
    $statement = $mysqli->prepare("INSERT INTO client (CourrielClient, MotDePasse, NomPrenomClient, 
    AdresseClient, PaysClient, CodePostalClient, VilleClient, NumeroTelephoneClient, InfoFinancieres ) 
    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
    //Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param('sssssssss', $email, $mdp, $name, $adresse, $pays, $code, $ville, $numero, $financier); 
    
    if($statement->execute()){
      print "Salut " . $name . ", vous êtes connecté !";
    }else{
      print $mysqli->error; 
    }
  }
?>

