<?php
$converter = filter_input(INPUT_POST, 'money')
$submit = filter_input(INPUT_POST, 'submit');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Converter </title>
</head>
<body>
 <form action = "index.php" method = "post">
    Zadejte peníze v Kč <input type="text" name="money">
    <input type="submit"
    
    <?php
 if (isset($submit)) { ?>
 Peníze v eurech: <?= $converter ?>

 <?php
  if ($converter = $converter * 27) { ?>
      Peníze v eurech
  <?php    
  } else { } ?>
 
 
 
 
<?php
} else { } ?>
 


</body>
</html>