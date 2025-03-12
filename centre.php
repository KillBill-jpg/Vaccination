<h2> Gestion des centres de vaccinations </h2>

<br>

<?php

	if (isset($_GET['action']) && isset($_GET['idcentre']))
	{
		$action = $_GET['action']; 
		$idcentre = $_GET['idcentre'];
		if ($action == "sup"){
			deleteCentre ($idcentre);
		}
	}

	require_once ("vue/vue_insert_centre.php");

	if(isset($_POST['Valider'])){
		insertCentre ($_POST); 

		echo "<br> Insertion réussie du centre <br>";
	}

	//récupération des centres à partir de la BDD
	$lesCentres = selectAllCentres (); 

	//affichage des centres 
	require_once ("vue/vue_select_centres.php");
?>