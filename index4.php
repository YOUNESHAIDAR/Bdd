<?php

//Connexion à la base de donnée
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

//Test du Connexion
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


//Notre requête
$req = $bdd->prepare('INSERT INTO abonnement(Abonnement)
                      VALUES(:abonnement)')  or die(print_r($bdd->errorInfo()));

$req->execute(array(
      'abonnement' => htmlspecialchars($_POST['abonnement']),
    ));
header('Location: inscription_pay.php');

 ?>
