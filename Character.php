<?php
class Character{

    //méthode magique
    function __construct(int $healthDefault, int $rageDefault){
        $this->setHealth($healthDefault);
        $this->setRage($rageDefault);
    }

    //attributs
    private int $health;
    private $rage;


    //méthode accéder health
    public function getHealth():int{
        return $this->health;
    }
    //méthode définir health
    public function setHealth(int $number){
            $this->health = $number;
    }
    
    
    //méthode définir rage
    public function setRage(int $number):bool{
        $this->rage = $number;
        return true;
    }
    //méthode accéder rage
    public function getRage():int{
    return $this->rage;
    }
    


}
