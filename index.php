<?php

require_once "banque/Compte.php";
require_once "banque/CompteEpargne.php";
require_once "banque/ComptePayant.php";
$compte=new Compte();
$comteEpargne=new CompteEpargne(5000);
$comtePayant=new CompteEpargne(500);
echo "<h2>CompteEpargne</h2>";
$comteEpargne->deposer(500);
$comteEpargne->retirer(100);
echo $comteEpargne->__toString();
echo $comteEpargne->calculerIntere();

echo "<h2>Compte Payant</h2>";
$comtePayant->deposer(500);
$comtePayant->retirer(100);
echo $comtePayant->__toString();

