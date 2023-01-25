<?php

require_once 'Personne.php';

class Client extends Personne
{
    private $adresse;
    private $nom;
    private $prenom;

    function __construct($nom,$prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function setadresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function afficher()
    {
        echo $this->nom. "-".$this->prenom."-".$this->adresse;
    }
}