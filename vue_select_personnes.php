<h3> Liste des Personnes </h3>

<table border="1"> 
	<tr>
		<td> ID Personne</td>
		<td> Nom </td>
		<td> Prénom </td>
		<td> Adresse </td>
		<td> Age</td>
		<td> Email </td>
		<td> Rôle </td>
		<td> Opérations </td>
	</tr>

	<?php
	foreach ($lesPersonnes as $unePersonne) {
		echo " <tr> "; 
		echo " <td> ".$unePersonne['idpersonne']." </td> ";
		echo " <td> ".$unePersonne['nom']." </td> ";
		echo " <td> ".$unePersonne['prenom']." </td> ";
		echo " <td> ".$unePersonne['adresse']." </td> ";
		echo " <td> ".$unePersonne['age']." </td> ";
		echo " <td> ".$unePersonne['email']." </td> ";
		echo " <td> ".$unePersonne['role']." </td> ";

		echo " <td>  "; 
		echo "<a href='index.php?page=4&action=sup&idpersonne=".$unePersonne['idpersonne']."'> <img src='images/supprimer.png' height='30' width='30'> </a>"; 

		echo " </td> ";
		echo " </tr> ";
	}
	?>
</table>