<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo8</title>
  </head>
  <body>
      <?php
        $nb1=1;
        $nb2=2;
        $nb3=3;
        $result=$nb1+$nb3+$nb3;
        function conc($nb1, $nb2, $nb3) {
            echo $nb1+$nb3+$nb3=$result;
        }
         conc();
      ?>
  </body>
</html>