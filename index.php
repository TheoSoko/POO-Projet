<?php
include 'Character.php';
include 'Hero.php';
include 'Orc.php';
$Hero = new Hero(2000, 0, 'super-arme', 250, 'super-armure', 600);
$Orc = new Orc(500, 0);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de castagne</title>
</head>
<body>

<?php 
    while ($Hero->getHealth() > 0){
        $damage = $Orc->attack();
        $Hero->attacked($damage);
    ?>
    <p><?=$Hero->getHealth(); ?></p>
    <p><?= 'L\'orc a infligé ' . $damage . ' de dégâts, l\'armure en a absorbé ' . ?></p>
    <?php } ?>


</body>
</html>