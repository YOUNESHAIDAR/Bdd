<?php

//Connexion à la base de donnée
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

//Test du Connexion
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


//Notre requête
$req = $bdd->prepare('INSERT INTO client(Nom, Prenom, Gmail, Tel, Adresse, Ville)
                      VALUES(:nom, :prenom, :gmail, :tel, :adresse, :ville)')  or die(print_r($bdd->errorInfo()));

$req->execute(array(
      'nom' => htmlspecialchars($_POST['nom']),
      'prenom' => htmlspecialchars($_POST['prenom']),
      'gmail' => htmlspecialchars($_POST['gmail']),
      'tel' => htmlspecialchars($_POST['tel']),
      'adresse' => htmlspecialchars($_POST['adresse']),
      'ville' => htmlspecialchars($_POST['ville']),
));

header('Location: validation.php');

 ?>
