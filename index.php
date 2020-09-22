<?php
$submit = filter_input(INPUT_POST, 'submit');
$czkeuro = filter_input(INPUT_POST, 'czkdoeuro');
$eurodoczk = filter_input(INPUT_POST, 'eurodoczk');
$kurzeuro = 27;
$kurzczk = 0.37;
$kolikpenez = filter_input(INPUT_POST, 'penize')
?>

<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Penežní converter </title>
</head>

<?php

if(isset($submit)) { ?>

Euro do czk <?= $eurodoczk = $kolikpenez * $kurzeuro ?>
Czk do euro <?= $czkeuro = $kolikpenez * $kurzczk ?>

<?php

} else { } ?>

<body>
    
  <form action="index.php" method="post">

 <p> Kolik penež <input type="text" name="penize"> </p>
 <p> Czk do Eur <input type="radio" value="czkdoeuro" name="converter"> </p>
 <p> Euro do czk <input type="radio" value="eurodoczk" name="converter"> </p>

 <input type="submit" name="submit" value="Odeslat">

</form>

</body>
</html>