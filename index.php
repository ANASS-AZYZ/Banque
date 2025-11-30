<?php

require_once "banque/Compte.php";
$compte=new Compte();
echo "<pre>";
print_r($compte->__toString());
echo "</pre>";