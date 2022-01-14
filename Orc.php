<?php
class Orc extends Character{

    //fonction magique
    function __construct(int $healthDefault, int $rageDefault){
        parent::__construct($healthDefault, $rageDefault);
    }

    //attribut
    private int $damage;
    private const MIN_DAMAGE = 600;
    private const MAX_DAMAGE = 800;


    //fonction phrase
    function sentenceOrcInfos(){
        return 'Cet orc possède ' . $this->getHealth() . ' points de vie, et ' . $this->getRage() . ' points de rage. Il est capable d\'infliger 
        800 points de dégâts par attaque.';
    }

    // Définit aléatoirement une valeure
    public function attack():int{
        $damage = (rand(self::MIN_DAMAGE , self::MAX_DAMAGE));
        return $damage;
    }

    //Définit la valeur de l'attaque
    public function setDamage(int $number) : void{
    $this->damage = $number;
    }
    //Définit la valeur de l'attaque
    public function getDamage():int{
    return $this->damage;
    }


    //Contre attaque du Héros
    public function HeroAttack($damageValue){
        $health = $this->getHealth();
        $health -= $damageValue;
        if ($health < 0){
            $health = 0;
        }
        $this->setHealth($health);
        return $damageValue;
    
    }



}