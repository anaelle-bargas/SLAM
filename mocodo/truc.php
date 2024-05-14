<?php
namespace SLAM\mocodo;
include "./Parseur.php";



// function tab_or_link($l){
//     echo '<br>'.$l;
//     return preg_match("/^[^,]+:.+$/", $l);
// }
$m = "AYANT-DROIT: nom ayant-droit, lien
DIRIGER, 0N [responsable] EMPLOYÉ, 01 PROJET
REQUÉRIR, 1N PROJET, 0N PIÈCE: qté requise
PIÈCE: réf. pièce, libellé pièce
COMPOSER, 0N [composée] PIÈCE, 0N [composante] PIÈCE: quantité";

$parseur1= new Parseur($m);


// $lignes = explode("\n", $m);

// foreach($lignes as $l){
//     if(tab_or_link($l) == 1){
//         echo "<br>c'est une table";
//     }
//     else{
//         echo"<br>c'est une cif ou une cim";
//     }
// }




