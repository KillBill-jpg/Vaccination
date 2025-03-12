<h3> Liste des centres de vaccinations </h3>

<table border="1"> 
	<tr>
		<td> ID Centre</td>
		<td> Nom du Centre</td>
		<td> Adresse </td>
		<td> Type du Centre</td>
		<td> Téléphone </td>
		<td> Opérations </td>
		 
	</tr>

	<?php
	foreach ($lesCentres as $unCentre) {
		echo " <tr> "; 
		echo " <td> ".$unCentre['idcentre']." </td> ";
		echo " <td> ".$unCentre['nom']." </td> ";
		echo " <td> ".$unCentre['adresse']." </td> ";
		echo " <td> ".$unCentre['typecentre']." </td> ";
		echo " <td> ".$unCentre['telephone']." </td> ";
		echo " <td>  "; 
		echo "<a href='index.php?page=2&action=sup&idcentre=".$unCentre['idcentre']."'> <img src='images/supprimer.png' height='30' width='30'> </a>";
		echo "<a href='index.php?page=2&action=edit&idcentre=".$unCentre['idcentre']."'> <img src='images/editer.png' height='30' width='30'> </a>";  

		echo " </td> ";
		echo " </tr> ";
	}
	?>
</table>