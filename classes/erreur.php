<?php

class Erreur{
    public $error=nill;
    public function construct($e){
        $this->error=$e;
    } 
    public function getMessage(){
        $chaine=null;
        switch($this->error){
            case 0: $chaine = "veuilez-vous connecter";
            case 1: $chaine="identifiants incorrects";
        }
    }
}
$er= new Erreur(1);
$er->getMessage();