<h3> Liste des vaccins </h3>

<?php
if (isset($_POST['modifier'])) {
    $idvaccin = $_POST['idvaccin'];
    $tab = [
        'designation' => $_POST['designation'],
        'dosage' => $_POST['dosage'],
        'rappel' => $_POST['rappel'],
        'c_indication' => $_POST['c_indication']
		'laboratoire' => $_POST['laboratoire']
    ];

    editVaccin($idvaccin, $tab);
    
    // Redirection après modification
    header("Location: index.php?page=2");
    exit();
}
?>

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
		echo "<a href='index.php?page=3&action=sup&idvaccin=".$unVaccin['idvaccin']."'> <img src='images/supprimer.png' height='30' width='30'> </a>"; 
		echo "<a href='index.php?page=3&action=edit&idpersonne=" . urlencode($unVaccin['idvaccin']) . "'> <img src='images/editer.png' height='30' width='30'> </a>";
		echo " </td> ";
		echo " </tr> ";
	}
	?>
</table>
