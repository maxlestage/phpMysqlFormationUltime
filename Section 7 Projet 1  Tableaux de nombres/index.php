<?php
	// PROJET # 1

	echo '<table border>
			<tr>
				<th>Nombre</th>
				<th>Carré</th>
				<th>Racine</th>
			</tr>';

	// LES LIGNES DES NOMBRES DYNAMIQUES
	for ($i = 1; $i < 11; $i++) {

		echo'<tr>
				<td>'.$i.'</td>
				<td>'.$i*$i.'</td>
				<td>'.sqrt($i).'</td>
			 </tr>';

	}
	
	echo '</table>';