<?php
	/*Exercice 1: Code qui retrouve la position du nombre recherché dont l'argument est passé en input de la console.*/
	$mon_tableau = array (1, 4, 6, 9, 16, 18, 59, 20, 30, 1, 9);
	echo " Ecrivez le nombre à rechercher: ";
	//Stocker la valeur input dans la variable nombre grace à la fonction fgets. 
	$nombre = trim(fgets(STDIN, 3));
	echo "\n le nombre écris : ".$nombre. "\n";
	$compteur = 0;
	$postion = array();
	for ($j=0; $j<count($mon_tableau); $j++){
		if($mon_tableau[$j] == $nombre){
			$position[] = $j; 
			$compteur ++;
		}
	}
	for($k=0; $k < count($position); $k++){
		echo "Position : ".$position[$k]." \n";
	}
	if(count($position) == 2){
		echo "\n true \n";
	}
	else{
		echo"\n False \n";
	}
?>