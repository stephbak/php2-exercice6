<?php
$age = 17;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie2</title>
</head>
<body>
    <?php if ($age >= 18){ ?>
      <p id="major">Tu es majeur.</p>
      <?php }else{ ?>
      <p id="minor">Tu n'es pas majeur.</p>
  <?php } ?>
</body>
</html>
