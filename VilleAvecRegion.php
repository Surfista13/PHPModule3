<?php

class VilleAvecRegion extends Ville
{
    private string $region;

    public function __construct($nom,$departement, $region)
    {
        parent::__construct($nom,$departement);
        $this->region = $region;
    }

    public function __toString()
    {
        return parent::__toString()." de la région ".$this->region;
    }


}