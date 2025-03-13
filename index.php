<?php
	require_once("modele/modele.php");

	if (isset($_GET['action']) && $_GET['action'] == "edit" && isset($_GET['idcentre'])) {
		echo "ID du centre reçu : " . $_GET['idcentre'];
	}
	
	if (isset($_GET['action']) && $_GET['action'] == "edit" && isset($_GET['idcentre'])) {
		$idcentre = $_GET['idcentre'];
		
		// Récupération des données actuelles du centre
		$uneConnexion = connexion();
		$requete = $uneConnexion->prepare("SELECT * FROM centre WHERE idcentre = ?");
		$requete->bind_param("i", $idcentre);
		$requete->execute();
		$result = $requete->get_result();
		$centre = $result->fetch_assoc();
		$requete->close();
		deconnexion($uneConnexion);
	
		if ($centre) {
			?>
			<h3>Modifier le centre</h3>
			<form method="post" action="">
				<input type="hidden" name="idcentre" value="<?= htmlspecialchars($centre['idcentre']) ?>">
				<label>Nom :</label>
				<input type="text" name="nom" value="<?= htmlspecialchars($centre['nom']) ?>" required>
				<br>
				<label>Adresse :</label>
				<input type="text" name="adresse" value="<?= htmlspecialchars($centre['adresse']) ?>" required>
				<br>
				<label>Type :</label>
				<input type="text" name="typecentre" value="<?= htmlspecialchars($centre['typecentre']) ?>" required>
				<br>
				<label>Téléphone :</label>
				<input type="text" name="telephone" value="<?= htmlspecialchars($centre['telephone']) ?>" required>
				<br>
				<input type="submit" name="modifier" value="Modifier">
			</form>
			<?php
		}
	}

	if (isset($_GET['action']) && $_GET['action'] == "edit" && isset($_GET['idpersonne'])) {
		echo "ID du patient reçu : " . $_GET['idpersonne'];
	}

	if (isset($_GET['action']) && $_GET['action'] == "edit" && isset($_GET['idpersonne'])) {
		$idcentre = $_GET['idpersonne'];
		
		// Récupération des données actuelles du centre
		$uneConnexion = connexion();
		$requete = $uneConnexion->prepare("SELECT * FROM personne WHERE idpersonne = ?");
		$requete->bind_param("i", $idpersonne);
		$requete->execute();
		$result = $requete->get_result();
		$personne = $result->fetch_assoc();
		$requete->close();
		deconnexion($uneConnexion);
	
		if ($personne) {
			?>
			<h3>Modifier le patient</h3>
			<form method="post" action="">
				<input type="hidden" name="idpersonne" value="<?= htmlspecialchars($personne['idpersonne']) ?>">
				<label>Nom :</label>
				<input type="text" name="nom" value="<?= htmlspecialchars($personne['nom']) ?>" required>
				<br>
				<label>Prenom :</label>
				<input type="text" name="prenom" value="<?= htmlspecialchars($personne['prenom']) ?>" required>
				<br>
				<label>Adresse :</label>
				<input type="text" name="adresse" value="<?= htmlspecialchars($personne['adresse']) ?>" required>
				<br>
				<label>Age :</label>
				<input type="number" name="age" value="<?= htmlspecialchars($personne['age']) ?>" required>
				<br>
				<label>Email :</label>
				<input type="text" name="email" value="<?= htmlspecialchars($personne['email']) ?>" required>
				<br>
				<label>Mot de passe :</label>
				<input type="text" name="mdp" value="<?= htmlspecialchars($personne['mdp']) ?>" required>
				<br>
				<label>Rôle :</label>
				<input type="text" name="role" value="<?= htmlspecialchars($personne['role']) ?>" required>
				<br>
				<input type="submit" name="modifier" value="Modifier">
			</form>
			<?php
		}
	}

	if (isset($_GET['action']) && $_GET['action'] == "edit" && isset($_GET['idvaccin'])) {
		echo "ID du vaccin reçu : " . $_GET['idvaccin'];
	}

	if (isset($_GET['action']) && $_GET['action'] == "edit" && isset($_GET['idvaccin'])) {
		$idcentre = $_GET['idvaccin'];
		
		// Récupération des données actuelles du centre
		$uneConnexion = connexion();
		$requete = $uneConnexion->prepare("SELECT * FROM vaccin WHERE idvaccin = ?");
		$requete->bind_param("i", $idvaccin);
		$requete->execute();
		$result = $requete->get_result();
		$vaccin = $result->fetch_assoc();
		$requete->close();
		deconnexion($uneConnexion);
	
		if ($vaccin) {
			?>
			<h3>Modifier le vaccin</h3>
			<form method="post" action="">
				<input type="hidden" name="idvaccin" value="<?= htmlspecialchars($vaccin['idvaccin']) ?>">
				<label>Designation :</label>
				<input type="text" name="designation" value="<?= htmlspecialchars($vaccin['designation']) ?>" required>
				<br>
				<label>Dosage :</label>
				<input type="text" name="dosage" value="<?= htmlspecialchars($vaccin['dosage']) ?>" required>
				<br>
				<label>Rappel :</label>
				<input type="text" name="rappel" value="<?= htmlspecialchars($vaccin['rappel']) ?>" required>
				<br>
				<label>Contre Indication :</label>
				<input type="text" name="c_indication" value="<?= htmlspecialchars($vaccin['c_indication']) ?>" required>
				<br>
				<label>Laboratoire :</label>
				<input type="text" name="laboratoire" value="<?= htmlspecialchars($vaccin['laboratoire']) ?>" required>
				<br>
				<input type="submit" name="modifier" value="Modifier">
			</form>
			<?php
		}
	}

	if (isset($_GET['action']) && $_GET['action'] == "edit" && isset($_GET['idvaccination'])) {
    	echo "ID de la vaccination reçu : " . $_GET['idvaccination'];
	}

	if (isset($_GET['action']) && $_GET['action'] == "edit" && isset($_GET['idvaccination'])) {
		$idcentre = $_GET['idvaccination'];
		
		// Récupération des données actuelles du centre
		$uneConnexion = connexion();
		$requete = $uneConnexion->prepare("SELECT * FROM vaccination WHERE idvaccination = ?");
		$requete->bind_param("i", $idvaccination);
		$requete->execute();
		$result = $requete->get_result();
		$vaccination = $result->fetch_assoc();
		$requete->close();
		deconnexion($uneConnexion);
	
		if ($vaccination) {
			?>
			<h3>Modifier la vaccination</h3>
			<form method="post" action="">
				<input type="hidden" name="idvaccination" value="<?= htmlspecialchars($vaccination['idvaccination']) ?>">
				<label>Date du vaccin :</label>
				<input type="date" name="dateVaccin" value="<?= htmlspecialchars($vaccination['dateVaccin']) ?>" required>
				<br>
				<label>Rapport :</label>
				<input type="text" name="rapport" value="<?= htmlspecialchars($vaccination['rapport']) ?>" required>
				<br>
				<input type="submit" name="modifier" value="Modifier">
			</form>
			<?php
		}
	}
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Vaccination</title>
	<meta charset="utf-8">
</head>
<body>
<center>
	<h1> Site de gestion des vaccinations </h1>
	<a href="index.php?page=1"> <img src="images/home.jpeg" height="100" width="100"> </a>
	<a href="index.php?page=2"> <img src="images/centre.jpeg" height="100" width="100"> </a>
	<a href="index.php?page=3"> <img src="images/vaccin.jpeg" height="100" width="100"> </a>
	<a href="index.php?page=4"> <img src="images/personne.png" height="100" width="100"> </a>
	<a href="index.php?page=5"> <img src="images/vaccination.png" height="100" width="100"> </a>

	<?php
	if (isset($_GET['page'])){
		$page = $_GET['page']; 
	}else {
		$page = 1; 
	}
	switch($page){
		case 1 : require_once ("home.php"); break;
		case 2 : require_once ("centre.php"); break; 
		case 3 : require_once ("vaccin.php"); break;
		case 4 : require_once ("personne.php"); break;
		case 5 : require_once ("vaccination.php"); break;
		default : require_once ("home.php"); break;
	}
	?>

</center>
</body>
</html>
