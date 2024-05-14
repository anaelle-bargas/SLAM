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
        $explode = explode(", ", $ligne);
        $this->nom = $explode[0];
        $this->cardTables = $this->cardTables(array_slice($explode, 1));
        $this->typeAsso = $this->typeAsso();
    }
    public function cardTables($elems){
        echo "<br> cardinalités <br>";
        foreach($elems as $l){

            $liens = explode(" ", $l);
            $cards = array();
            $origins = array();
            $lenChamps = count($liens);
            for($i=0;$i<$lenChamps;$i++){
                if(ctype_digit($liens[$i][0])){
                    echo "nombre".$liens[$i][0];
                }
            }
            echo print_r($elems);
        }
    }
    public function typeAsso(){
        echo "typeAsso cardTables";

    }
}