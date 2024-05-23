<?php 

// Criado por Arthur Netto & Jonathan Alves

$alunos = array('Naruto', 'Sasuke', 'Shikamaru', 'Hinata', 'Itachi', 'Kakashi', 'Rock Lee', 'Madara', 'Hashirama', 'Minato');
$notas = array(4, 8, 7, 9, 6, 3, 5, 1, 2, 10);
$a = 0;
$mediaNotas = 0;

		$mediaNotas = ($notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4] + $notas[5] + $notas[6] + $notas[7] + $notas[8] + $notas[9]) / 10;

		echo "a média da classe foi $mediaNotas";

		$a = max($notas);

		if($a == $notas[0]){

			echo "<br>$alunos[0] teve a maior nota" ;

		}elseif($a == $notas[1]){

			echo "<br>$alunos[1] teve a maior nota" ;

		}elseif($a == $notas[2]){

			echo "<br>$alunos[2] teve a maior nota" ;

		}elseif($a == $notas[3]){

			echo "<br>$alunos[3] teve a maior nota" ;

		}elseif($a == $notas[4]){

			echo "<br>$alunos[4] teve a maior nota" ;

		}elseif($a == $notas[5]){

			echo "<br>$alunos[5] teve a maior nota" ;

		}elseif($a == $notas[6]){

			echo "<br>$alunos[6] teve a maior nota" ;

		}elseif($a == $notas[7]){

			echo "<br>$alunos[7] teve a maior nota" ;

		}elseif($a == $notas[8]){

			echo "<br>$alunos[8] teve a maior nota" ;

		}else{

			echo "<br>$alunos[9] teve a maior nota" ;

		}	

 ?>
