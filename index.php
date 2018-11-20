<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercise</title>
  </head>
  <body>
    <p>Créer une variable et l'initialiser à 1.Tant que cette variable n'atteint pas 10, il faut :</p>
    <ol>
      <li>l'afficher</li>
      <li>l'incrementer de la moitié de sa valeur</li>
    </ol>
    <p>1er Test</p>
    <?php for ($count=1; $count < 10; $count += $count/2) { ?>
    <p><?php echo $count; } ?></p>
    <p>2eme Test</p>
    <p><?php
    $count = 1;
    while ($count < 10) { ?></p>
    <p><?php echo $count; ?></p>
    <?php $count += $count/2; } ?>
  </body>
</html>
