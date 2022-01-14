<?php
declare(strict_types = 1);
require 'Character.php';
require 'Hero.php';
require 'Orc.php';
$Hero = new Hero(2000, 0, 'Excalibur', rand(50, 120), 'Côte de maille', 600);
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
<h1>Jeu de castagne</h1>
<p>
    Héros: <br>
    Points de vie: <?= $Hero->getHealth() ?> <br>
    Points de rage: <?= $Hero->getRage() ?> <br>
    Arme: <?= $Hero->getWeapon() ?> <br>
    Dégats de l'arme: <?= $Hero->getWeaponDamage() ?> <br>
    Armure: <?= $Hero->getShield() ?> <br>
    Capacité de l'armure: <?= $Hero->getShieldValue() ?> <br>
</p>

<p>
    Orc: <br>
    Points de vie: <?= $Orc->getHealth() ?> <br>
    Points de rage: <?= $Orc->getRage() ?> <br>
    Capacité d'attaque max: 800 <br>
</p>

<?php 
    //Boucle
    while (($Hero->getHealth() > 0) && ($Orc->getHealth() > 0 )){
        $damage = $Orc->attack();
        $Hero->attacked($damage);
    ?>
    <!-- Affichage du text -->
    <p><?= 'L\'attaque de l\'orc est de ' . $damage . ', l\'armure en a absorbé ' . $Hero->shieldAbsorption($damage) . '. Ton héros a perdu ' 
            . $Hero->attacked($damage) . ' points de vie. La rage actuelle de ton héros est de ' . $Hero->getRage() . '. Il lui reste ' . $Hero->getHealth()
            . ' points de vie.' ;?> </p>


    <!-- Rage du Héros -->
    <?php if ($Hero->getRage() >= 100){ 
        $Orc->HeroAttack($Hero->getWeaponDamage()); ?>
    <p> <?= 'Le Héros a contre attaqué!!'?> </p>
    <p> <?='L\'orc a maintenant ' . $Orc->getHealth() . ' points de vie.'?> </p>
    <?php } ?>

     <!-- Mort du Héros -->
    <?php if ($Hero->getHealth() == 0){ ?>
            <p><?='Votre Héros est mort. Vous êtes nul.'?></p>
          <?php  } ?>
    
    <!-- Mort de l'orc -->
    <?php if ($Orc->getHealth() == 0){ ?>
            <p><?='L\'orc est mort. Vous êtes trop fort!'?></p>
          <?php } ?>
    
     <?php } ?>

</body>
</html>