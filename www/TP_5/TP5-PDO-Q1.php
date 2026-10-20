<!DOCTYPE html>
<html lang="fr">
	  <head>
		<meta charset="utf-8">
		<title>TP 5 SQL dans un langage de programmation PDO</title>
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

		
		<!-- Lien vers mon CSS -->
		<link href="TP5-PDO.css" rel="stylesheet">					
   </head>

	<body>
		<div class="container">
			<div class="col-12  cadre">		
			<h1>Formulaire d'inscription</h1><br>				
				<form method="post" action="TP5-PDO.php">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="codeClient">Code Client : </label>
							<input type="text" name="codeClient" id="codeClient" placeholder="Code client (maximum 15 caractères)" class="form-control" value=""> 
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="nomMagasin">Nom magasin : </label>
							<input type="text" name="nomMagasin" id="nomMagasin" placeholder="Nom du magasin (maximum 35 caractères)" class="form-control" value=""> 
						</div>
						<div class="form-group col-md-12">
							<label for="responsable">Nom du Responsable : </label>
							<input type="text" name="responsable" id="responsable" placeholder="Nom du responsable (maximum 35 caractères)" class="form-control" value="">
						</div>
						<div class="form-group col-md-12">
							<label for="adresse1">Adresse ligne 1 : </label>
							<input type="text" name="adresse1" id="adresse1" placeholder="Ligne d'adresse 1 (maximum 35 caractères)" class="form-control" value=""> 
						</div>
						<div class="form-group col-md-12">
							<label for="adresse2">Adresse ligne 2 : </label>
							<input type="text" name="adresse2" id="adresse2" placeholder="Ligne d'adresse 2 (maximum 35 caractères)" class="form-control" value=""> 
						</div>
					</div>
					
					<div class="form-row">
						<div class="form-group col-md-2">
						  <label for="cdp">Code postal :</label>
						  <input type="text" name="cdp" id="cdp" placeholder="5 chiffres (Obligatoire)" class="form-control" value="">
						</div>
						<div class="form-group col-md-10">
							<label for="ville">Ville : </label>
							<input type="text" name="ville" id="ville" placeholder="Taper votre bureau distributeur (maximum 35 caractères)" class="form-control" value="">
						</div>
					</div>
					
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="categorie">Catégorie : </label>
							<?php 
								require 'tp5Modele.php';

								try{
									$pdo = connecte();
									$resultats = recupCategorie($pdo);
									
										echo "<select class='form-select' name='categorie'>" ;
										echo "<option><value>Choisir dans la liste</value></option>";
										
										while($ligne = $resultats->fetch() ) { 									
											echo "<option>";															
												echo "<value>".htmlspecialchars($ligne->DESIGNATION);						
											echo "</option>";															
										}
										echo "</select>" ;		
									
								}catch(PDOException $e){
									echo "<h1>Erreur BD ".$e->getMessage();
								}
							?>
						</div>
						<div class="form-group col-md-3">
						  <label for="noTel">Numéro de téléphone :</label>
						  <input type="text" name="noTel" id="noTel" placeholder="Format 0565656565" class="form-control" value="">
						</div>
						<div class="form-group col-md-3">
							<label for="mail">Adresse Mail : </label>
							<input type="text" name="mail" id="mail" placeholder="Taper votre adresse E-mail" class="form-control" value="">
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary btn-block">Valider le formulaire</button>
					<br>
				</form>
			</div>
		</div>
	</body>
</html>