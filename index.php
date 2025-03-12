<?php
	require_once("modele/modele.php");
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