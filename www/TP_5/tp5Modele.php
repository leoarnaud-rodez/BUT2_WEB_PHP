<?php
	function connecte() {
			
		try {	
			$host = 'localhost';   // Serveur de BD
			$db = 'mezabi3';   	   // Nom de la BD
			$user = 'root';        // User 
			$pass = 'root';        // Mot de passe
			$charset = 'utf8mb4';  // charset utilisé
			
			// Constitution variable DSN
			$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
			
			// Réglage des options
			$options = [                                                                             
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
				PDO::ATTR_EMULATE_PREPARES => false
			];
			
			return new PDO($dsn, $user, $pass, $options); // Connexion PDO	
		} catch (PDOException $e) {
			throw $e;
		}
	}

	function recupCategorie($pdo) {
			
		try {	
			$requete = "SELECT DESIGNATION, CODE_TYPE FROM c_types ORDER BY DESIGNATION ASC"; 		
			return $pdo->query($requete);		
		} catch (PDOException $e) {
			throw $e;
		}
	}
	
	function insererClient($pdo, $codeClient, $nomMagasin, $nomResponsable, $adresseLigne1, $adresseLigne2, $codePostal, $ville, $Categorie, $numTel, $mail) {
		try {
			$requete = "INSERT INTO `clients` (`CODE_CLIENT`, `NOM_MAGASIN`, `ADRESSE_1`, `ADRESSE_2`, `CODE_POSTAL`, `VILLE`, `RESPONSABLE`, `TELEPHONE`, `EMAIL`, `TYPE_CLIENT`) VALUES
						(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$stmt = $pdo->prepare($requete);
			$stmt->execute([$codeClient, $nomMagasin, $adresseLigne1, $adresseLigne2, $codePostal, $ville, $nomResponsable, $numTel, $mail, $Categorie]);
			return $pdo->lastInsertId();
		} catch (PDOException $e) {
			throw $e;
		}
	}
?>