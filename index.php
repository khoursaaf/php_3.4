<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercise</title>
    </head>
    <body>
      <p>
        Créer une variable et l'initialiser à 1.
        Tant que cette variable n'atteint pas 10, il faut :</p>
        <ol>
          <li>l'afficher</li>
          <li>l'incrementer de la moitié de sa valeur</li>
        </ol>
        <?php
        for ($a=1; $a < 10; $a += 0.5) {
           echo $a.'<br />';
        }
         ?>
    </body>
</html>
