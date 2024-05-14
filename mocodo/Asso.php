<?php
namespace SLAM\mocodo;

class Asso{
    public $nom;
    public $cardTables;
    public $typeAsso;
    public $champs;

    public function __construct($ligne)
    {
        echo "Asso";
        $elems = explode(", ", $ligne);
        $this->nom = $elems[0];
        
        $this->cardTables = $this->cardTables($elems);
        $this->typeAsso = $this->typeAsso($this->cardTables);
    }
    public function cardTables($elems){
        echo print_r($elems);
    }
    public function typeAsso($cardTables){
        echo "typeAsso cardTables".$cardTables;

    }
}