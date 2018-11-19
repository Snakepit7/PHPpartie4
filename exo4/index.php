<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo4</title>
  </head>
  <body>
      <?php
        function number($firstnb, $secondnb){
            if ($firstnb > $secondnb) {
                echo 'Le premier nombre est plus grand';
            } else if ($firstnb < $secondnb) {
                echo 'Le premier nombre est plus petit';
            } else {
                echo 'Les deux nombres sont identiques';
            }
        }
        
        number(9,9);
      ?>
  </body>
</html>