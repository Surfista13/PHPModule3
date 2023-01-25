<?php

class Ville
{
    private string $nom;
    private string $departement;


    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getDepartement(): string
    {
        return $this->departement;
    }

    public function setDepartement(string $departement): void
    {
        $this->departement = $departement;
    }

    public function __toString()
    {
        return  "la ville ". $this->getNom() ." est dans le département ". $this->getDepartement();
    }


}