<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- HEAD -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!-- Title -->
        <title>TEST</title>
        <!-- END Title -->

    </head>
    
    
    <body>

    
        <center>

    <h3> TEST </h3>

     <?php
    
    $large=65;
    $haut=25;
    $nombre=16;
    $sommealea;

    $tempsdanstruc=35;

    $a = array(rand(0,$haut-1),rand(0,$large-1),"A");
    $b = array(rand(0,$haut-1),rand(0,$large-1),"B");
    $c = array(rand(0,$haut-1),rand(0,$large-1),"C");
	$d = array(rand(0,$haut-1),rand(0,$large-1),"D");
    $e = array(rand(0,$haut-1),rand(0,$large-1),"E");
    $f = array(rand(0,$haut-1),rand(0,$large-1),"F");
    $g = array(rand(0,$haut-1),rand(0,$large-1),"G");
    $h = array(rand(0,$haut-1),rand(0,$large-1),"H");
    $a2 = array(rand(0,$haut-1),rand(0,$large-1),"I");
    $b2 = array(rand(0,$haut-1),rand(0,$large-1),"J");
    $c2 = array(rand(0,$haut-1),rand(0,$large-1),"K");
    $d2 = array(rand(0,$haut-1),rand(0,$large-1),"L");
    $e2 = array(rand(0,$haut-1),rand(0,$large-1),"M");
    $f2 = array(rand(0,$haut-1),rand(0,$large-1),"N");
    $g2 = array(rand(0,$haut-1),rand(0,$large-1),"O");
    $h2 = array(rand(0,$haut-1),rand(0,$large-1),"ℛ");

    $all = array($a,$b,$c,$d,$e,$f,$g,$h,$a2,$b2,$c2,$d2,$e2,$f2,$g2,$h2);
    $all2 = array($a,$b,$c,$d,$e,$f,$g,$h,$a2,$b2,$c2,$d2,$e2,$f2,$g2,$h2);

    echo "<font size='0'>";

	for($i=0;$i<$haut;$i++){
		for($j=0;$j<$large;$j++){
			$no = 0;
			for($lis=0;$lis<$nombre;$lis++){
				if($all[$lis][0]==$i and $all[$lis][1]==$j){
					echo "&nbsp;&nbsp;".$all[$lis][2]."&nbsp;&nbsp;";
					$no = 1;
					}
				}
								if($no == 0){
					echo "&nbsp;&nbsp;.&nbsp;&nbsp;";
				}
		}   
		echo "</br> ";
	}    
	
	echo "</br>";

	for($lis=0;$lis<$nombre;$lis++){
		for($y=$lis+1;$y<$nombre;$y++){
			$dista = round(sqrt(pow(($all[$lis][0]-$all[$y][0]),2)+pow(($all[$lis][1]-$all[$y][1]),2)),2);
    		// echo $all[$lis][2].$all[$y][2].": ".$dista."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp"; // AFFICHER LA LISTE DES DISTANCES
    		$sommealea=$sommealea+$dista;
   			}
		}

	$trajet = array("A");
	$last = $a; // *LAST = type coordonné
	$temp=$all[count($all)-1];
	$all[0]=$temp;
	array_pop($all);
	$somme;
	$somme2;



	$next[]=$all[0];
	echo "</br> ------------- </br> ";


	// ALGO TOTAL : 

	$heure=480;

	$bestsomme=10000000000;
	$bestfirst="A";
	$besttrajet;

	for($first=0;$first<15;$first++){

	$all = $all2;

	$trajet2 = array($all[$first][2]);
	$last = $all[$first]; // *LAST = type coordonné
	$temp=$all[count($all)-1];
	$all[$first]=$temp;
	array_pop($all);
	$somme2;
	$nextat = array();

	$next[]=$all[0];
	$bestnexta;
	$nextat;

	$heure=480;
	$resto=0;

	for($i=0;$i<$nombre-1;$i++){

		if($heure<800 && $heure>710 && $resto==0){
			$resto=1;
			for($j=0;$j<count($all);$j++){
				if($all[$j][2]=="ℛ"){
					$pos_win=$j;
					$next = array($last[2],$all[$j][2]);
					$nexta = $last;
				}

			}

		$trajet2[]=$next[1];
		$nextat[]=$nexta;
		$last=$all[$pos_win];
		$temp=$all[count($all)-1];
		$all[$pos_win]=$temp;
		array_pop($all);
		$somme2=$somme2+$min;


		}else{

		$min=10000000000;
		for($j=0;$j<count($all);$j++){ 
			$tempdis=round(sqrt(pow(($last[0]-$all[$j][0]),2)+pow(($last[1]-$all[$j][1]),2)),2);
			if($min>$tempdis && $tempdis>0 && $all[$j][2]!="ℛ"){
				$min=$tempdis;
				$pos_win=$j;
				$next = array($last[2],$all[$j][2]);
				$nexta = $last;
			}
		}

		$heure+=$tempdis+$tempsdanstruc;

		$trajet2[]=$next[1];
		$nextat[]=$nexta;
		$last=$all[$pos_win];
		$temp=$all[count($all)-1];
		$all[$pos_win]=$temp;
		array_pop($all);
		$somme2=$somme2+$min;

	}
}
	if($bestsomme>$somme2){
		$bestsomme=$somme2;
		$besttrajet=$trajet2;
		$bestnexta=$nextat;

	}
	$somme2=0;


}


	echo "Le chemin idéal (algo v.2): ";
	for($i=0;$i<$nombre;$i++){
		if($i==$nombre-1){
			echo "puis ".$besttrajet[$i];
		}else{
			echo $besttrajet[$i].", ";
		}
	}

	echo "</br> </br>------HEURE------ </br> </br>";
	$heure = 480;
	for($i=0;$i<$nombre-2;$i++){
		$tempdis=round((sqrt(pow(($bestnexta[$i][0]-$bestnexta[$i+1][$j][0]),2)+pow(($bestnexta[$i][1]-$bestnexta[$i+1][1]),2))/2),2);
		$h=round($heure/60,0,PHP_ROUND_HALF_DOWN).":";
		if(round($heure%60,0)>9){
			$h=$h.round($heure%60,0);
		}else{
			$h=$h."0".round($heure%60,0);
		}
		echo "De ".$h." à ";
		$heure+=$tempdis;
		$h=round($heure/60,0,PHP_ROUND_HALF_DOWN).":";
		if(round($heure%60,0)>9){
			$h=$h.round($heure%60,0);
		}else{
			$h=$h."0".round($heure%60,0);
		}
		echo $h." -> ".$bestnexta[$i][2].$bestnexta[$i+1][2]."</br>";
		$heure+=35;
	}


    ?>


	</center>
    
    </body>
    
    
    
    
</html>


