<?php

require_once 'Ville.php';
require_once 'VilleBis.php';
require_once 'Form.php';
require_once 'Client.php';
require_once 'Personne.php';

//Test exo 1
$v1 = new Ville();
$v1->setNom("Nantes");
$v1->setDepartement("44");

echo $v1->__toString()."</br>";

//Test exo2
$v3 = new VilleBis("Lyon","69");
$v4 = new VilleBis("Menton","06");
echo $v3->__toString()."</br>";
echo $v4->__toString()."</br>";

echo VilleBis::getVilleLaPlusLongue()."</br>";

//test exo5
$f1 = new Form("Submit","Post");
$f1->setText();
$f1->setText();
$f1->setsubmit();
$f1->getForm();

//test exo7
$p1 = new Client("DD","Pierre");
$p1->setadresse("3 rue des champs");
echo $p1->afficher();
