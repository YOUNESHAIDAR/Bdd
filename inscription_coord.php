<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Coordonnées</title>
  <link rel="stylesheet" href="inscription_coord.css">
</head>
  <body>
    <div class="wrapper">
       <div class="contact-form">
          <div class="input-fields">
             <form action="index2.php" method="post">
              <p>
              <ul>
                 Vos Coordonnées
              </ul>
                <label for="nom">Nom</label> : <input  class="input" type="text" name="nom"/><br />
                <label for="prenom">Prenom</label> :  <input  class="input" type="text" name="prenom"/><br />
                <label for="gmail">Gmail</label> : <input  class="input" type="text" name="gmail"/><br />
                <label for="tel">Tel</label> : <input  class="input" type="text" name="tel"/><br />
                <label for="adresse">Adresse</label> : <input  class="input" type="text" name="adresse"/><br />
                <label for="ville">Ville</label> : <input  class="input" type="text" name="ville"/><br />
                <input class="btn" type="submit" value="Envoyer vos Coordonnées" />
        
               </p>

             </form>
            </div>
          </div>
       </div>       
  </body>
</html>