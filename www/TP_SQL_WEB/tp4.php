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

			try{	// Bloc try bd injoignable ou si erreur SQL
				$pdo = connecte();
				$resultats = recupClients($pdo);
				
				echo "<div class='container'>";
					echo "<h1>Etape 1</h1>";
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
				
				// étape 2
				
				echo "<div class='container'>";
					echo "<h1>Etape 2</h1>";
				
					$resultats = recupClients($pdo);

					echo "<div class='row'>";
					
						while( $ligne = $resultats->fetch() ) {
							echo "<div class='col-12 col-sm-6 col-md-4'>";
								echo "<div class='cadre'>";
									echo "ID :".$ligne->ID_CLIENT."<br>";
									echo "Code client :".$ligne->CODE_CLIENT."<br>";
									echo "Nom magasin :".$ligne->NOM_MAGASIN."<br>";
									echo "Adresse 1 :".$ligne->ADRESSE_1."<br>";
									echo "Adresse 2 :".$ligne->ADRESSE_2."<br>";
									echo "Code postal / Ville :".$ligne->CODE_POSTAL." ".$ligne->VILLE."<br>";
									echo "Téléphone :".$ligne->TELEPHONE."<br>";
									echo "Email :".$ligne->EMAIL."<br>";
								echo "</div>";
							echo "</div>";
						}
					
					echo "</div>";
				echo "</div>";
				
			}catch(PDOException $e){
				//Il y a eu une erreur 
				echo "<h1>Erreur BD ".$e->getMessage();
			}
		?>
	</body>
</html>