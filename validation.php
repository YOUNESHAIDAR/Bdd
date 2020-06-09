<head>
	<link rel="stylesheet" href="validation.css">
</head>
<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table 
$reponse = $bdd->query('SELECT Nom FROM client');

// On affiche chaque entrée une à une

$donnees = $reponse->fetch();
?>
    <p>
    <strong class="valiation"> Merci! Votre demande est validée <br /> </strong>
    </p>
