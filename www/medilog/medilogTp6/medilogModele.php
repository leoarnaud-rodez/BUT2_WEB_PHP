<?php
	function connecte() {
			
		try {	
			$host = 'localhost';   // Serveur de BD
			$db = 'medicaments';   // Nom de la BD
			$user = 'root';        // User 
			$pass = 'root';        // Mot de passe
			$charset = 'utf8mb4';  // charset utilisé
			
			$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
			
			// Réglage des options
			$options = [                                                                             
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
				PDO::ATTR_EMULATE_PREPARES => false
			];
			
			return new PDO($dsn, $user, $pass, $options); // Connexion PDO	
		} catch (Exception $e) { // Excpetion pour être large
			throw $e;
		}
	}

	function recupTypeMedicament($pdo) {
			
		try {	
			$requete = "SELECT DISTINCT Type FROM medicaments ORDER BY Type ASC"; 		
			return $pdo->query($requete);		
		} catch (Exception $e) { // Excpetion pour être large
			throw $e;
		}
	}
	
	function recupLaboratoire($pdo) {
			
		try {	
			$requete = "SELECT DISTINCT Labo FROM medicaments ORDER BY Labo ASC"; 		
			return $pdo->query($requete);		
		} catch (Exception $e) { // Excpetion pour être large
			throw $e;
		}
	}
	
	function recupResultatRecherche($pdo, $designation, $type, $labo) {
		try {
			$debReq   = "SELECT Designation, Type, Labo FROM medicaments";
			$finReq   = "ORDER BY Designation";
			$criteres = "";
			
			if (___) {
				if (___) {
					___
				}
			}
			/*
			 * si designation est ""
			 * si pas de where ajout d'un where
			 * ajout de désignation Like %designation%
			 */
			if (___) {
				if (___) {
					___
				}
			}
			/*
			 * si type est ""
			 * si pas de where ajout d'un where
			 * sinon ajout d'un and
			 * ajout de type = ___
			 */
			if (___) {
				if (___) {
					___
				}
			}
			/*
			 * si labo est ""
			 * si pas de where ajout d'un where
			 * sinon ajout d'un and
			 * ajout de labo = ___
			 */
			$requete = $debReq . $criteres . $finReq;
			$stmt = $pdo->prepare($requete);
			$stmt->bindParam();
			
			return $stmt->execute();
		} catch (Exception $e) { // Excpetion pour être large
			throw $e;
		}
		

		
	}
?>