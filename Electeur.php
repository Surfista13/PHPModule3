<?php

class Electeur extends Personne //
{
    public $bureau_de_vote;
    public $vote;
    function __construct($nom,$prenom)
    {
    }

    public function avoter($bureau_de_vote)
    {
        $this->bureau_de_vote = $bureau_de_vote;
        $this->vote=TRUE;
    }

    protected function afficher()
    {
        // TODO: Implement afficher() method.
    }
}