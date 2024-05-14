<?php
namespace SLAM\mocodo;

class Table {
    public $nom;
    public $champs;

    public function __construct($ligne)
    {
        echo "Table";
        $this->nom ="";
        $this->champs = array();

    }
    

    public function setNom($ligne){
        $nom=explode(":", $ligne);
        $this->nom =$nom[0];
    }

    public function addChamps($champ){
        array_push($this->champs, $champ);
    }
}