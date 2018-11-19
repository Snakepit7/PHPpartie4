<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo7</title>
  </head>
  <body>
      <?php
           
        function type($age, $gender) {
            if ($age >=18 and $gender ==='homme') {
           echo 'Vous êtes un homme et vous êtes majeur';
        } elseif ($age >=18 and $gender === 'femme') {
            echo 'Vous êtes une femme et vous êtes majeure';
        } elseif ($age <18 and $gender ==='homme') {
            echo 'Vous êtes un homme et vous êtes mineur';
        } elseif ($age <18 and $gender ==='femme') {
            echo 'Vous êtes une femme et vous êtes mineure';
        }
        }
        
        type(17,'femme');
      ?>
  </body>
</html>