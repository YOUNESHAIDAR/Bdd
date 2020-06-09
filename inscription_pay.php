<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Payement</title>
  <link rel="stylesheet" href="inscription_pay.css">
</head>
  <body>
    <div class="wrapper">
       <div class="contact-form">
          <div class="input-fields">
             <form action="index5.php" method="post">
             <ul>
              Info De Réglement
             </ul> 
            <label for="num">Num</label> : <input  class="input" type="text" name="num"/><br />
            <label for="exp">Exp</label> : <input  class="input" type="text" name="exp"/><br />
            <label for="cvc">Code De sécurité</label> : <input  class="input" type="text" name="cvc"/><br />
            <input class="btn" type="submit" value="Valider Votre Commande" />
            

             </form>
            </div>
          </div>
       </div>       
  </body>
</html>