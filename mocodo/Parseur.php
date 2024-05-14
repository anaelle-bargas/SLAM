<?php
namespace SLAM\mocodo;
include "./Table.php";
include "./Asso.php";
class Parseur{
    public $m;
    public $lignes;

    public function __construct($m)
    {
        $this->m = $m;
        // echo "<br> mocodo code = ".$this->m;
        // echo "lignes"+$this->lignes;
        $this->lignes = $this->setLignes();
        // print_r($this->lignes);
        foreach($this->lignes as $l){
            
            // echo "<br> ligne".$l;
            $this->Array_Assoc($l);
        }
    }
    //CIF, 1 au max
    public function setLignes(){
        return explode("\n", $this->m);
    }

    public function cimCif($l){
        return 0;
    }
    public function Array_Assoc($l){
        return preg_match("/^[^,]+:.+$/", $l)?new Table($l):new Asso($l);
    }



}