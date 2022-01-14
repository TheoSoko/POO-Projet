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

        //Attributs
        private $weapon;
        private $weaponDamage;
        private $shield;
        private $shieldValue;


    //Phrase sur les informations du héros
    public function sentenceHeroInfos(){
        return 'Ton Héros utilise ' . $this->getWeapon() . ' comme arme, infligeant ' . $this->getWeaponDamage() . ' de dégâts basiques. Il utilise
        aussi ' . $this->getShield() . ' comme armure, qui encaisse ' . $this->getShieldValue() . ' de dégâts à sa place. ' . 
        'Il possède ' . $this->getHealth() . ' points de vie, et ' . $this->getRage() . ' points de rage. ';
    } 



    // L'attribut weapon définit le nom de l'arme équipée
    public function setWeapon(string $weaponChoice) : void{
        $this->weapon = $weaponChoice;
    }
    public function getWeapon():string{
        return $this->weapon;
    }

    // weaponDamage indique les dégâts basiques de l'arme, 
    public function setWeaponDamage(int $number) : void{
        $this->weaponDamage = $number;
    }
    public function getWeaponDamage():int{
        return $this->weaponDamage;
    }

    // shield définit le nom de l'armure équipée.
    public function setShield(string $shieldChoice) : void{
        $this->shield = $shieldChoice;
    }
    public function getShield():string{
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
        $this->increaseRage();
        return $realDamage;
    }

    //Méthode pour déterminer les dégâts qu'absorbe l'armure.
    function shieldAbsorption(int $damageValue):int{
        if ($damageValue < $this->shieldValue){
            $shieldAbsorbed = $this->shieldValue;
        } else {
            $shieldAbsorbed = $this->shieldValue;
        }
        return $shieldAbsorbed;
    }



    //Pour chaque coup reçu, il faudra faire gagner de la rage à notre Héros. Créer une méthode permettant d’augmenter la valeur de rage de 30.
    private function increaseRage():int{
        $rage = $this->getRage();
        $rage += 15;
        $this->setRage($rage);
        return $rage;
    }

}

