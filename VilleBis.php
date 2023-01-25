<?php

class VilleBis
{
    private string $nom;
    private string $departement;
    public static string $villeLaPlusLongue = "";

    public function __construct(string $nom, string $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
        self::defineVilleLaPlusLongue($this->nom);
    }

    public function __toString()
    {
        return  "la ville ". $this->nom." est dans le département ". $this->departement;
    }

    function defineVilleLaPlusLongue(string $nom){
        if(strlen(self::$villeLaPlusLongue) < strlen($nom)){
            self::$villeLaPlusLongue = $nom;
        }
    }
    public static function getVilleLaPlusLongue(): string
    {
        return self::$villeLaPlusLongue;
    }


}