<?php
	require_once("modele/modele.php");
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Vaccination</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
	</head>

<body>
	<center>
		<header>
			<div class="texte-bienvenue">
			<h1>Bienvenue, nous sommes Adrien et Rayan et vous êtes dans notre site !</h1S>
			</div>
			<div class="photos">
                <img class="photo" src="images/adrien.jpg" title="Adrien RUSAOUEN">
                <img class="photo" src="images/rayan.jpg" title="Rayan BENNACEUR">
            </div>
		</header>

			<div class="logo">
				<h1> Site de gestion des vaccinations </h1>
				<a href="index.php?page=1"> <img src="images/home.jpeg" height="100" width="100"> </a>
				<a href="index.php?page=2"> <img src="images/centre.jpeg" height="100" width="100"> </a>
				<a href="index.php?page=3"> <img src="images/vaccin.jpeg" height="100" width="100"> </a>
				<a href="index.php?page=4"> <img src="images/personne.png" height="100" width="100"> </a>
				<a href="index.php?page=5"> <img src="images/vaccination.png" height="100" width="100"> </a>
			</div>

		<section>
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
		</section>
	
			
	</center>

	<footer>
	<section>
			<h1>Nos coordonées</h1>
            <div class="coordonees">
                <a href="https://www.linkedin.com/in/rayan-bennaceur-95729b289/" target="_blank">
                    <img class="logo-footer" src="images/linkedin-logo.png">

                <a class="cta" href="https://mail.google.com/mail/u/0/#inbox" target="_blank">adrien.rayan@contact.fr</a><br>

                <a href="https://github.com/" target="_blank">
                    <img class="logo-footer" src="images/github-mark.png">
                </a><br>
				<p>2025© Adrien et Rayan</p>
            </div>
            
        </section>
	</footer>

</body>
</html>
