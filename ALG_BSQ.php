<?php
    
function checkmap($file)
{
	$maps = file($file);
	$firstline = trim($maps[0]);
	$check=false;
	
	if (is_numeric(($firstline))) {
		$nb=intval(array_shift($maps));
		$nbl =  count($maps);
		if ($nbl > 1) {
			for( $i= 1 ; $i < $nbl ; $i++) {
				$nbc = strlen(trim($maps[$i]));
				$firstnbc = strlen(trim($maps[1]));
				if ($nbc == $firstnbc) {
					if (preg_match("/[.o]/",$maps[$i]) ) {
						if ($nb == $nbl) {
							$check=true;
						}
						else {
							print("Le nombre au début du fichier ne correspond pas aux nombres de lignes présent dans le fichier.\n");
							exit();
						}
					}
					else {
						print("Toutes les lignes du fichiers ne correspondent pas.\n");
						exit();
					}
				}
				else {
					print("Le fichier n'a pas le meme nombre de colonnes.\n");
					exit();
				}
			}
		}
		if ($check == true) {
			for ($j=0; $j < $nbl; $j++) { 
				$maps[$j]=str_split(trim($maps[$j]));
			}
			square($maps,$nb, $nbl, $nbc);
		}
	}
	else {
		print("Le fichier ne commence pas par un nombre.\n");
		exit();
	}
}

function border()
{

}

function replace()
{

}

function printsquare()
{

}


checkmap('plateau.txt');
?>