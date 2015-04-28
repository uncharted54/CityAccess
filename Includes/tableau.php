<?php

include_once ROOT_PATH.'/Includes/base.php';

function Tableau(){


$TabF='<ul id="menu-demo2">';
$Loisir=array("Loisir");

$search = "SELECT nom  FROM loisirs";
$result = mysql_query($search);

$i=0;
while (isset($row[0]) || $i == 0) {
	$i=+1;
	$row = mysql_fetch_row($result);
	$thisname = $row[0];
	if (isset($thisname)) {
		array_push($Loisir,$thisname);
	}
}

$Musée=array("Musée");

$search = "SELECT nom  FROM musees";
$result = mysql_query($search);

$i=0;
while (isset($row[0]) || $i == 0) {
	$i=+1;
	$row = mysql_fetch_row($result);
	$thisname = $row[0];
	if (isset($thisname)) {
		array_push($Musée,$thisname);
	}
}


$Resto=array("Resto");

$search = "SELECT nom  FROM restaurants";
$result = mysql_query($search);

$i=0;
while (isset($row[0]) || $i == 0) {
	$i=+1;
	$row = mysql_fetch_row($result);
	$thisname = $row[0];
	if (isset($thisname)) {
		array_push($Resto,$thisname);
	}
}


$Magasin=array("Magasin");

$search = "SELECT nom  FROM magasins";
$result = mysql_query($search);

$i=0;
while (isset($row[0]) || $i == 0) {
	$i=+1;
	$row = mysql_fetch_row($result);
	$thisname = $row[0];
	if (isset($thisname)) {
		array_push($Magasin,$thisname);
	}
}


$Hotel=array("Hotel");

$search = "SELECT nom  FROM hotels";
$result = mysql_query($search);

$i=0;
while (isset($row[0]) || $i == 0) {
	$i=+1;
	$row = mysql_fetch_row($result);
	$thisname = $row[0];
	if (isset($thisname)) {
		array_push($H,$thisname);
	}
}

$menu=array($Musée,$Loisir,$Resto,$Magasin,$Hotel);


for ($i=0; $i < count($menu); $i++) {
    $TabF=$TabF.'<li><a href="#">'.$menu[$i][0].'</a><ul>';
        for ($j=1; $j<count($menu[$i]); $j++) {
            $TabF=$TabF.'<li><input type="checkbox" id="centre" name="centre" onclick="document.choose.submit()" value="'.$menu[$i][$j].'"><a href="#">'.$menu[$i][$j].'</a></li>';
        }
    $TabF=$TabF.'</ul></li>';
}


$TabF=$TabF.'</ul>';

return $TabF;

}

function getInfo($what, $s) { 
    $search = "SELECT " . $what . " FROM musees,hotels,restaurants,loisirs,magasins WHERE nom = '" . $s . "'";
    $thisc = mysql_query($search);
    $row = mysql_fetch_row($thisc);
    return $row[0];
}




?>