<h3> Liste des vaccinations </h3>

<?php
if (isset($_POST['modifier'])) {
    $idvaccination = $_POST['idvaccination'];
    $tab = [
        'dateVaccin' => $_POST['dateVaccin'],
        'rapport' => $_POST['rapport'],
    ];

    editVaccination($idvaccination, $tab);
    
    // Redirection après modification
    header("Location: index.php?page=2");
    exit();
}
?>


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
		echo "<a href='index.php?page=5&action=edit&idpersonne=" . urlencode($uneVaccination['idvaccination']) . "'> <img src='images/editer.png' height='30' width='30'> </a>";
		echo " </td> ";
		echo " </tr> ";
	}
	?>
</table>
