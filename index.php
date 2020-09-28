<?php
$submit = filter_input(INPUT_POST, 'submit');
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

 if ($_POST['converter'] == "eurodoczk") {
   echo ("<p>CZK ". $kolikpenez * $kurzeuro . "</p>");
 } elseif ($_POST['converter'] == "czkdoeuro") {
   echo ("<p> EUR " . $kolikpenez * $kurzczk . "</p>");
 } else {
   echo ("kurz není vybrán");
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