<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo7</title>
  </head>
  <body>
      <?php
        function conc($lastname, $firstname, $age) {
            echo 'Bonjour '.$lastname.' '.$firstname.' tu as '.$age.' ans.';
        }
        
        conc('Dupond','Henri','42');
      ?>
  </body>
</html>