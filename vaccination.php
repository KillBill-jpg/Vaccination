<h2> Gestion des vaccinations </h2>
 

<br>

<?php
	require_once ("vue/vue_insert_vaccination.php");

	if(isset($_POST['Valider'])){
		insertVaccination ($_POST); 

		echo "<br> Insertion réussie de la Vaccination <br>";
	}

	//récupération des vaccinations à partir de la BDD
	$lesVaccinations = selectAllVaccinations (); 

	//affichage des vaccinations 
	require_once ("vue/vue_select_Vaccinations.php");
?>