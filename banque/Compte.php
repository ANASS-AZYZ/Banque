<?php
    class Compte{
        private $solde;
        private $code;
        private static $dernierCode=0;


        public function __construct($solde=null){
            $this->code=static::$dernierCode++;
            $this->solde=$solde;
        }
        public function getSolde(){
            return $this->solde;
        }
        public function getCode(){
            return $this->code;
        }
    }



