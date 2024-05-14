<?php
namespace SLAM\mocodo;

class Table {
    public $nom;
    public $champs;
    public $sql;

    public function __construct($ligne)
    {
        echo "Table";
        $this->nom =$this->setNom($ligne);
        $this->champs = $this->addChamps($ligne);
        echo "<br> ligne ".$ligne;
        echo "<br> nomTable ".$this->nom;
        echo "<br> champsTable <br>";
        print_r($this->champs);
        $this->sql=$this->setCode();
        echo "<br> sql code ".$this->sql;
        echo "<br> FinTable <br>";

    }

    public function setCode(){
        $code= "CREATE TABLE ".$this->nom."(<br>";
        $cs = $this->champs;
        $lenChamps = count($cs);
        for($i=0;$i<$lenChamps;$i++){
            $code.=$cs[$i].(($i==0)?" PRIMARY KEY, <br>":(($i==$lenChamps-1)?"<br>":",<br>"));
        }
        foreach($this->champs as $c){
        }
        return $code.");";
    }
    

    public function setNom($ligne){
        return explode(":", $ligne)[0];
    }

    public function addChamps($ligne){
        $champs = explode(": ", $ligne)[1];
        return explode(", ", $champs);
    }


}