<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Inversion de Chaine</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.2.0/css/fontawesome.min.css" integrity="sha384-mj4mLShEAyWi4Bui9LmFkAjPYWof6WrG8DfS8ebHhjm4/MClMqMMHpQzehNk5HeM" crossorigin="anonymous">
		<link rel="stylesheet" href="TP3.css">
	</head>
	<body>
		<div class="container">
			<div class="row mb-3">
				<div class="col-4">
					<?php
					    if (isset($_GET['nom'])) {
						    
					    } else {
					  	    
					    }
						
						$leNom=$_GET['nom'];
						if (!empty($leNom)) {
							echo "<label class="."ok".">Votre nom : $leNom</label>";
						} else {
							echo "<label class="."erreur".">Merci de rentrer votre nom</label>";
						}
					?>
				</div>
				<div class="col-4">
					<?php
						if (isset($_GET['nom'])) {
						    
					    } else {
					  	    
					    }
						
						$lePrenom=$_GET['prenom'];
						if (!empty($lePrenom)) {
							echo "<label class="."ok".">Votre prenom : $lePrenom</label>";
						} else {
							echo "<label class="."erreur".">Merci de rentrer votre prénom</label>";
						}
					?>
				</div>
				<div class="col-4">
					<?php
						if (isset($_GET['nom'])) {
						    
					    } else {
					  	    
					    }
						
						$laFormation=$_GET['formation'];
						if (!empty($laFormation)) {
							echo "<label class="."ok".">Votre formation : $laFormation</label>";
						} else {
							echo "<label class="."erreur".">Merci de rentrer votre formation</label>";
						}
					?>
				</div>
				<div class="col-12">
					<?php
						if (isset($_GET['nom'])) {
						    
					    } else {
					  	    
					    }
						
						$laQuestion=$_GET['question'];
						if (!empty($laQuestion)) {
							echo "<label class="."ok".">Votre question : $laQuestion</label>";
						} else {
							echo "<label class="."erreur".">Merci de rentrer votre question</label>";
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>