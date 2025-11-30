<?php
require_once "compte.php";

class ComptePayant extends Compte{

    public function retirer($argent){
        parent::retirer($argent);
        $this->solde -= 5;
    }
    public function deposer($argent){
        parent::deposer($argent);
        $this->solde -=5;
    }
}

