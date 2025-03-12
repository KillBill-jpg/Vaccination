<h3> Liste des vaccins </h3>

<table border="1"> 
	<tr>
		<td> ID Vaccin</td>
		<td> Désignation </td>
		<td> Dosage </td>
		<td> Rappel</td>
		<td> Contre indication </td>
		<td> Laboratoire </td>
		<td> Opérations </td>
	</tr>
 
	<?php
	foreach ($lesVaccins as $unVaccin) {
		echo " <tr> "; 
		echo " <td> ".$unVaccin['idvaccin']." </td> ";
		echo " <td> ".$unVaccin['designation']." </td> ";
		echo " <td> ".$unVaccin['dosage']." </td> ";
		echo " <td> ".$unVaccin['rappel']." </td> ";
		echo " <td> ".$unVaccin['c_indication']." </td> ";
		echo " <td> ".$unVaccin['laboratoire']." </td> ";
		echo " <td>  "; 
		echo "<a href='index.php?page=2&action=sup&idvaccin=".$unVaccin['idvaccin']."'> <img src='images/supprimer.png' height='30' width='30'> </a>"; 

		echo " </td> ";
		echo " </tr> ";
	}
	?>
</table>