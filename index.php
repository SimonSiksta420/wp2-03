<?php
$submit = filter_input(INPUT_POST, 'submit');
$czkdoeuro = filter_input(INPUT_POST, 'czkdoeuro');
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

<body>

<?php

if(isset($submit)) { ?>

 <?php

 if ($eurodoczk = $kolikpenez * $kurzeuro) { ?>
   <?= $eurodoczk ?>
  <?php
   } elseif ($czkdoeuro = $kolikpenez * $kurzczk) { ?>
     <?= $czkdoeuro ?>
   <?php
   } else { ?>
   <?php
   }
   

} else {  ?>

<form action="index.php" method="post">

 <p> Kolik penež <input type="text" name="penize"> </p>
 <p> Czk do Eur <input type="radio" value="czkdoeuro" name="converter"> </p>
 <p> Euro do czk <input type="radio" value="eurodoczk" name="converter"> </p>

 <input type="submit" name="submit" value="Odeslat">

</form>
<?php  }  ?>
</form>
</body>
</html>