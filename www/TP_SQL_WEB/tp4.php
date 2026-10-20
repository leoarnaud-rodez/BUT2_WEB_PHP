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
			require 'tp4modele.php';

			try{
				$pdo = connecte();
				$resultats = recupClients($pdo);
				
				echo "<div class='container'>";
					echo "<h1>Etape 1</h1>";
					echo "<table class='table table-striped'>" ;																
					echo "<tr><td>ID</td><td>Code client</td><td>Nom du magasin</td><td>Adresse 1</td><td>Adresse 2</td><td>Code postal / Ville</td><td>Téléphone</td><td>Adresse email</td></tr>";		
					
					while( $ligne = $resultats->fetch() ) { 									
						echo "<tr>";															
							echo "<td>".htmlspecialchars($ligne->ID_CLIENT)."</td>";								
							echo "<td>".htmlspecialchars($ligne->CODE_CLIENT)."</td>";								
							echo "<td>".htmlspecialchars($ligne->NOM_MAGASIN)."</td>";								
							echo "<td>".htmlspecialchars($ligne->ADRESSE_1)."</td>";								
							echo "<td>".htmlspecialchars($ligne->ADRESSE_2)."</td>";								
							echo "<td>".htmlspecialchars($ligne->CODE_POSTAL)." ".$ligne->VILLE."</td>";								
							echo "<td>".htmlspecialchars($ligne->TELEPHONE)."</td>";								
							echo "<td>".htmlspecialchars($ligne->EMAIL)."</td>";								
						echo "</tr>";															
					}
					echo "</table>" ;	
				echo "</div>";	
				
				// étape 2
				
				echo "<div class='container'>";
					echo "<h1>Etape 2</h1>";
				
					$resultats = recupClients($pdo);

					echo "<div class='row'>";
					
						while( $ligne = $resultats->fetch() ) {
							echo "<div class='col-12 col-sm-6 col-md-4'>";
								echo "<div class='cadre'>";
									echo "ID :".htmlspecialchars($ligne->ID_CLIENT)."<br>";
									echo "Code client :".htmlspecialchars($ligne->CODE_CLIENT)."<br>";
									echo "Nom magasin :".htmlspecialchars($ligne->NOM_MAGASIN)."<br>";
									echo "Adresse 1 :".htmlspecialchars($ligne->ADRESSE_1)."<br>";
									echo "Adresse 2 :".htmlspecialchars($ligne->ADRESSE_2)."<br>";
									echo "Code postal / Ville :".htmlspecialchars($ligne->CODE_POSTAL)." ".htmlspecialchars($ligne->VILLE)."<br>";
									echo "Téléphone :".htmlspecialchars($ligne->TELEPHONE)."<br>";
									echo "Email :".htmlspecialchars($ligne->EMAIL)."<br>";
								echo "</div>";
							echo "</div>";
						}
					
					echo "</div>";
				echo "</div>";
				
			}catch(PDOException $e){
				//il y a eu une erreur 
				echo "<h1>Erreur BD ".$e->getMessage();
			}
		?>
	</body>
</html>