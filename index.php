<?php
 $submit = filter_input(INPUT_POST, 'submit');
 $spz = filter_input(INPUT_POST, 'spz');
 $auto = filter_input(INPUT_POST, 'auto');
 $stariauta = filter_input(INPUT_POST, 'stariauta');
 $cenaauta = filter_input(INPUT_POST, 'cenaczk');
 $types = array('Osobní automobil', 'Autobus','Dodávka','Nákladní automobil');
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Prodej aut </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php
if (isset($submit)) { ?>
  <p> Vozidlo: <?= $auto ?> </p>
  <p> SPZ: <?= $spz ?> </p>
  <p> Stáří auta: <?= $stariauta ?> </p>
  <p> Cena auta v euro: <?= $cenaczk ?> </p>
  

 <?php
  if ($stariauta > 2009) { ?>
    Moderní
  <?php
  } elseif ($stariauta > 1989) { ?>
    Ojeté
  <?php
  } else { ?>
    Veterán
  <?php
  }





} else {  ?>

<form action="index.php" method="post">

 Rok výroby: <input type="number" id="stari" name="stariauta" min="1900" max="2020">

 Cena v Czk <input type="text" id="cena" name="cenaczk">

 Typ vozidla: <select name="auto" id="cars">
 <?php foreach ($types as $type) { ?>
   <option value = <?= $type ?>"><?= $type ?> </option>
 <?php } ?>

</select>
<br> SPZ <input type="text" name="spz" > 
<br> <input type="submit" name="submit" value="Odeslat">
</form>
<?php } ?>
</form>
</body>
</html>