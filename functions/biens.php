<?php

require_once 'database.php';

function get_biens_immobiliers(){
    $sql = 'SELECT * FROM bienimmobilier';
    $pdo = get_db();
    $query = $pdo->prepare($sql);
    $query->execute();

    $biens = $query->fetchAll();

    return $biens;
}


function get_bien_immobilier_by_id($id){
    $sql = 'SELECT * FROM bienimmobilier WHERE Numero=:numero';
    $pdo = get_db();
    $query = $pdo->prepare($sql);
    $query->bindValue(':numero', $id);
    $query->execute();

    $biens = $query->fetch();

    return $biens;
}

function get_biens_immobiliers_by_id_cat($id){
    $sql = 'SELECT * FROM bienimmobilier where id_categorie = :id_categorie;';
    $pdo = get_db();
    $query = $pdo->prepare($sql);
    $query->bindValue(':id_categorie', $id);
    $query->execute();

    $biens = $query->fetchAll();

    return $biens;
}

function get_agents(){
    $sql = 'SELECT * FROM agent;';
    $pdo = get_db();
    $query = $pdo->prepare($sql);
    $query->execute();

    $agents = $query->fetchAll();

    return $agents;
}

?>
