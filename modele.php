<?php

	function connexion (){
		$serveur = "localhost"; 
		$bdd = "vaccination_1A"; 
		$user = "root"; 
		$mdp = ""; 
		$uneConnexion = mysqli_connect($serveur, $user,$mdp,$bdd);
		if( $uneConnexion ){
			return $uneConnexion;
		}else {
			echo "<br> Erreur de connexion a la BDD<br>";
			return null; 
		}
	} 

	function deconnexion ($uneConnexion){
		mysqli_close ($uneConnexion) ;
	}

	function insertCentre($tab) {
		// Connect to the database
		$uneConnexion = connexion();
	
		// Prepare the SQL statement
		$requete = $uneConnexion->prepare("INSERT INTO centre VALUES (NULL, ?, ?, ?, ?)");
	
		// Bind the parameters
		$requete->bind_param("ssss", $tab['nom'], $tab['adresse'], $tab['typecentre'], $tab['telephone']);
	
		// Execute the statement
		$requete->execute();
	
		// Close the statement and connection
		$requete->close();
		deconnexion($uneConnexion);
	}
	

	function insertVaccin ($tab){
		//on se connecte à la base de données 
		$uneConnexion = connexion(); 

		//on rédige la requete 
		$requete ="insert into vaccin values(null, '"
			. $tab['designation']."','".$tab['dosage']."','"
			. $tab['rappel']."','"
			. $tab['c_indication']."','".$tab['laboratoire']."'); ";

		//on execute la requete 
		mysqli_query($uneConnexion, $requete);

		//on ferme la connexion 
		deconnexion($uneConnexion);
	}

	function insertPersonne($tab) {
		// Connect to the database
		$uneConnexion = connexion();
	
		// Prepare the SQL statement without 'prenom'
		$requete = $uneConnexion->prepare("INSERT INTO personne (idpersonne, nom, adresse, age, email, mdp, role) VALUES (NULL, ?, ?, ?, ?, ?, ?)");
	
		// Bind the parameters without 'prenom'
		$requete->bind_param("ssiisss", $tab['nom'], $tab['adresse'], $tab['age'], $tab['email'], $tab['mdp'], $tab['role']);
	
		// Execute the statement
		$requete->execute();
	
		// Close the statement and connection
		$requete->close();
		deconnexion($uneConnexion);
	}
	
	
	function insertVaccination($tab) {
		// Connect to the database
		$uneConnexion = connexion();
	
		// Debugging: Print the values being inserted
		echo "Inserting vaccination with idcentre: " . $tab['idcentre'] . ", idvaccin: " . $tab['idvaccin'] . ", idpersonne: " . $tab['idpersonne'];
	
		// Prepare the SQL statement
		$requete = $uneConnexion->prepare("INSERT INTO vaccination (idvaccination, dateVaccin, rapport, idcentre, idvaccin, idpersonne) VALUES (NULL, ?, ?, ?, ?, ?)");
	
		// Bind the parameters
		$requete->bind_param("ssiii", $tab['dateVaccin'], $tab['rapport'], $tab['idcentre'], $tab['idvaccin'], $tab['idpersonne']);
	
		// Execute the statement
		$requete->execute();
	
		// Close the statement and connection
		$requete->close();
		deconnexion($uneConnexion);
	}
	
	

	function selectAllCentres ()
	{
		$requete = "select * from centre ;"; 
		$uneConnexion = connexion();
		$lesCentres = mysqli_query($uneConnexion, $requete);
		deconnexion($uneConnexion);
		return $lesCentres; 
	}
	function selectAllVaccins ()
	{
		$requete = "select * from vaccin ;"; 
		$uneConnexion = connexion();
		$lesVaccins = mysqli_query($uneConnexion, $requete);
		deconnexion($uneConnexion);
		return $lesVaccins; 
	}
	function selectAllPersonnes ()
	{
		$requete = "select * from personne ;"; 
		$uneConnexion = connexion();
		$lesPersonnes = mysqli_query($uneConnexion, $requete);
		deconnexion($uneConnexion);
		return $lesPersonnes; 
	}
	function selectAllVaccinations ()
	{
		$requete = "select * from vaccination ;"; 
		$uneConnexion = connexion();
		$lesVaccinations = mysqli_query($uneConnexion, $requete);
		deconnexion($uneConnexion);
		return $lesVaccinations; 
	}

	function deleteCentre ($idcentre){
		$uneConnexion = connexion(); 
		$requete ="delete from centre where idcentre =".$idcentre.";";
		mysqli_query($uneConnexion, $requete);
		deconnexion($uneConnexion);
	}
	function deletePersonne ($idpersonne){
		$uneConnexion = connexion(); 
		$requete ="delete from personne where idpersonne =".$idpersonne.";";
		mysqli_query($uneConnexion, $requete);
		deconnexion($uneConnexion);
	}
	function deleteVaccin ($idvaccin){
		$uneConnexion = connexion(); 
		$requete ="delete from vaccin where idvaccin =".$idvaccin.";";
		mysqli_query($uneConnexion, $requete);
		deconnexion($uneConnexion);
	}
	function deleteVaccination ($idvaccination){
		$uneConnexion = connexion(); 
		$requete ="delete from vaccination where idvaccination =".$idvaccination.";";
		mysqli_query($uneConnexion, $requete);
		deconnexion($uneConnexion);
	}
?> 



