<h2> Gestion des vaccins </h2>

<br>

<?php
	require_once ("vue/vue_insert_vaccin.php");

	if(isset($_POST['Valider'])){
		insertVaccin ($_POST); 

		echo "<br> Insertion réussie du vaccin <br>";
	}

	//récupération des vaccins à partir de la BDD
	$lesVaccins = selectAllVaccins (); 

	//affichage des vaccins 
	require_once ("vue/vue_select_vaccins.php");
?>