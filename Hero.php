<?php
class Hero extends Character{

    //Méthode magique
    function __construct(int $healthDefault, int $rageDefault, string $weaponDefault, int $weaponDamageDefault, string $shieldDefault, int $shieldValueDefault){
        $this->setWeapon($weaponDefault);
        $this->setWeaponDamage($weaponDamageDefault);
        $this->setShield($shieldDefault);
        $this->setShieldValue($shieldValueDefault);
        parent::__construct($healthDefault, $rageDefault);
    }
    //Phrase sur les informations du héros
    public function sentenceHeroInfos(){
        return 'Ton Héros utilise l\'arme ' . $this->getWeapon() . ', infligant ' . $this->getWeaponDamage() . ' de dégâts basiques. Il utilise
        aussi l\'armure ' . $this->getShield() . ', qui encaisse' . $this->getShieldValue() . 'de dégâts à la place du héros' . 
        'Il a ' . $this->getHealth() . ' points de vie, et ' . $this->getRage() . ' de rage. ';
    } 

    //Attributs
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    // L'attribut weapon définit le nom de l'arme équipée
    public function setWeapon(string $weaponChoice){
        $this->weapon = $weaponChoice;
    }
    public function getWeapon():string{
        return $this->weapon;
    }

    // weaponDamage indique les dégâts basiques de l'arme, 
    public function setWeaponDamage(int $number){
        $this->weaponDamage = $number;
    }
    public function getWeaponDamage():int{
        return $this->weaponDamage;
    }

    // shield définit le nom de l'armure équipée,
    public function setShield(string $name){
        $this->shield = $name;
    }
    public function getShield():int{
        return $this->shield;
    }

    // shieldValue indique le nombre de dégâts que l'armure encaisse à la place du héros. 
    public function getShieldValue():int{
        return $this->shieldValue;
    }
    public function setShieldValue(int $number){
        $this->shieldValue = $number;
    }

    //Créer une méthode attacked dans la classe Hero permettant au Héros de prendre des dégâts en considérant la valeur de l’armure.
    public function attacked(int $damageValue):int{ 
        $realDamage = $damageValue - $this->getshieldValue();
        $health = $this->getHealth();
        $health -= $realDamage;
        if ($health < 0){
            $health = 0;
        }
        $this->setHealth($health);
        return $realDamage;
    }

    //Pour chaque coup reçu, il faudra faire gagner de la rage à notre Héros. Créer une méthode permettant d’augmenter la valeur de rage de 30.
    public function increaseRage(){
        return $this->getRage() + 30;
    }
}

