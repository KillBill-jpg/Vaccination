<h3> Liste des vaccinations </h3>

<table border="1"> 
	<tr>
		<td> ID Vaccination</td>
		<td> Date vaccination </td>
		<td> Raport </td>
		<td> ID Centre</td>
		<td> Id Vaccin </td>
		<td> Id Personne </td>
		<td> Opérations </td>
	</tr>

	<?php
	foreach ($lesVaccinations as $uneVaccination) {
		echo " <tr> "; 
		echo " <td> ".$uneVaccination['idvaccination']." </td> ";
		echo " <td> ".$uneVaccination['dateVaccin']." </td> ";
		echo " <td> ".$uneVaccination['rapport']." </td> ";
		echo " <td> ".$uneVaccination['idcentre']." </td> ";
		echo " <td> ".$uneVaccination['idvaccin']." </td> ";
		echo " <td> ".$uneVaccination['idpersonne']." </td> ";
		echo " <td>  "; 
		echo "<a href='index.php?page=5&action=sup&idvaccination=".$uneVaccination['idvaccination']."'> <img src='images/supprimer.png' height='30' width='30'> </a>"; 

		echo " </td> ";
		echo " </tr> ";
	}
	?>
</table>