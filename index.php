<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Penežní converter </title>
</head>

<body>
    
  <form action="index.php" method="post">

 <p> Kolik penež <input type="text" name="penize"> </p>
 <p> Czk do Eur <input type="radio" value="czkdoeuro" name="converter"> </p>
 <p> Euro do czk <input type="radio" value="eurodoczk" name="converter"> </p>

 <input type="submit" name="submit" value="Odeslat">

</form>

</body>
</html>