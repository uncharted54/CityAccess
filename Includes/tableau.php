<?php

function Tableau(){

$TabF='<ul id="menu-demo2">';
$menu=array(
    array("Musée","njhbg","poc"),
    array("Resto","yuffut"),
    array("Magasin","sfsd","ppo","azfsd"),
    array("Loisir","hsi","dhb"),
    array("Hotel","wesh")
    );
for ($i=0; $i < count($menu); $i++) {
    $TabF=$TabF.'<li><a href="#">'.$menu[$i][0].'</a><ul>';
        for ($j=1; $j<count($menu[$i]); $j++) {
            $TabF=$TabF.'<li><a href="#">'.$menu[$i][$j].'</a></li>';
        }
    $TabF=$TabF.'</ul></li>';
}
$TabF=$TabF.'</ul>';



return $TabF;

}



?>