<?php
abstract class Personne
{
    private $nom;
    private $prenom;
    abstract protected function __construct($nom,$prenom) ;
    abstract protected function afficher();
}