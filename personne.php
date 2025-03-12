<h2> Gestion des patients </h2>

<br>

<?php
	require_once ("vue/vue_insert_personne.php");

	if(isset($_POST['Valider'])){
		insertPersonne ($_POST); 

		echo "<br> Insertion réussie du Personne <br>";
	}

	//récupération des personnes à partir de la BDD
	$lesPersonnes = selectAllPersonnes (); 

	//affichage des personnes 
	require_once ("vue/vue_select_personnes.php");
?>