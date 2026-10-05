<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>TP4-SQL-PDO</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.2.0/css/fontawesome.min.css">
		<link rel="stylesheet" href="monStyle.css">
	</head>
	<body>
		<?php 
			$host='localhost';	// Serveur de BD
			$db='mezabi3';		// Nom de la BD
			$user='root';		// User 
			$pass='root';		// Mot de passe
			$charset='utf8mb4';	// charset utilisé
			
			// Constitution variable DSN
			$dsn="mysql:host=$host;dbname=$db;charset=$charset";
			
			// Réglage des options
			$options=[																				 
				PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
				PDO::ATTR_EMULATE_PREPARES=>false];
			
			try{	// Bloc try bd injoignable ou si erreur SQL
				$pdo=new PDO($dsn,$user,$pass,$options);											// Connexion PDO
				
				echo "<div class='container'>";
					echo "<h1>Etape 1</h1>";
					$requete="SELECT * FROM clients ORDER BY CODE_CLIENT ASC"  ; 		
					$resultats=$pdo->query($requete);  					
					echo "<table class='table table-striped'>" ;																
					echo "<tr><td>ID</td><td>Code client</td><td>Nom du magasin</td><td>Adresse 1</td><td>Adresse 2</td><td>Code postal / Ville</td><td>Téléphone</td><td>Adresse email</td></tr>";		
					
					while( $ligne = $resultats->fetch() ) { 									
						echo "<tr>";															
							echo "<td>".$ligne->ID_CLIENT."</td>";								
							echo "<td>".$ligne->CODE_CLIENT."</td>";								
							echo "<td>".$ligne->NOM_MAGASIN."</td>";								
							echo "<td>".$ligne->ADRESSE_1."</td>";								
							echo "<td>".$ligne->ADRESSE_2."</td>";								
							echo "<td>".$ligne->CODE_POSTAL." ".$ligne->VILLE."</td>";								
							echo "<td>".$ligne->TELEPHONE."</td>";								
							echo "<td>".$ligne->EMAIL."</td>";								
						echo "</tr>";															
					}
					echo "</table>" ;	
				echo "</div>";	
				echo "<div class='container'>";
					echo "<h1>Etape 2</h1>";
				echo "</div>";
				
			}catch(PDOException $e){
				//Il y a eu une erreur 
				echo "<h1>Erreur BD ".$e->getMessage();
			}
		?>
	</body>
</html>