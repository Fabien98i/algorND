<?php
//Exercice 2; 
	$texte = fgets(STDIN);
	echo"\n Majuscule: ".strtoupper ($texte);
	echo"\n Minuscule: ". strtolower($texte);
	// fonction qui remplace tout les delimiteurs par un seul delimiteur ici "." et qui le supprime par la suite.
	function multiexplode ($delimiteurs, $texte){
		$remplacement = str_replace($delimiteurs, ".", $texte);
		$texte_decoupe = explode(".", $remplacement); 
		return $texte_decoupe;
	}

	// fonction qui vérifie toutes les occurences du texte traité.
	function occurences ($mot){
		$cpt = 0;
		$taille_texte = count($mot)-1; // taille = taille du texte - 1 pour ne pas prendre en compte le saut de ligne à la fin duu texte.
		for ($i = 0; $i<$taille_texte; $i++){
			for ($j = 0; $j<$taille_texte; $j++){
				if ($i != $j){
					if (!strcmp($mot[$i],$mot[$j])){
						echo "\n i = ".$i." et j = ".$j;
						$num = 1;
						echo "\n".$num;
					}
					else {
						$num = 0;
						echo "\n".$num;					}
				}
			}
		}
	}

	$texte_final= multiexplode(array(" ","\r\n"), $texte);
	print_r($texte_exploded);
	for($k=0; $k<count($texte_final); $k++){
		echo $texte_final[$k];
		echo "\n".strlen($texte_final[$k]);
	}
	occurences($texte_final);
?>