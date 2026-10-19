<?php
	function connecte() {
			
		try {	
			$host = 'localhost';   // Serveur de BD
			$db = 'mezabi3';        // Nom de la BD
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
		} catch (Exception $e) { // Excpetion pour être large
			throw $e;
		}
	}

	function recupClients($pdo) {
			
		try {	
			$requete = "SELECT * FROM clients ORDER BY CODE_CLIENT ASC"; 		
			return $pdo->query($requete);		
		} catch (Exception $e) { // Excpetion pour être large
			throw $e;
		}
	}
?>