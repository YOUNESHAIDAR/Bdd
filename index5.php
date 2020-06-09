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
$req = $bdd->prepare('INSERT INTO reglement(Num, Exp, Cvc)
                      VALUES(:num, :exp, :cvc)')  or die(print_r($bdd->errorInfo()));
$req->execute(array(
      'num' => htmlspecialchars($_POST['num']),
      'exp' => htmlspecialchars($_POST['exp']),
      'cvc' => htmlspecialchars($_POST['cvc']),
      ));
header('Location: validation.php');

 ?>