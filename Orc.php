<?php
class Orc extends Character{

    //fonction magique
    function __construct(int $healthDefault, int $rageDefault){
        parent::__construct($healthDefault, $rageDefault);
    }

    //fonction phrase
    function sentenceOrcInfos(){
        return 'Cet orc est capable d\'infliger ' . $this->getDamage() . ' de dégâts par attaque.';
    }

    //attribut
    private $damage;

    // Définit aléatoirement une valeure
    public function attack():int{
        $damage = (rand(600,800));
        return $damage;
    }

    //Définit la valeur de l'attaque
    public function setDamage(int $number){
    $this->damage = $number;
    }
    //Définit la valeur de l'attaque
    public function getDamage():int{
    return $this->damage;
    }






}