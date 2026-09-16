<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Inversion de Chaine</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="TP3.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.2.0/css/fontawesome.min.css" integrity="sha384-mj4mLShEAyWi4Bui9LmFkAjPYWof6WrG8DfS8ebHhjm4/MClMqMMHpQzehNk5HeM" crossorigin="anonymous">
		</head>
	<body>
		<form method="get" action="">
			<div class="container">
				<div class="row mb-3">
					<div class="col-12">
						<h1>Formulaire</h1>
					</div>
					<div class="col-4">
						<label>Nom</label><br>
						<input type="text" name="nom">
					</div>
					<div class="col-4">
						<label>Prénom</label><br>
						<input type="text" name="prenom">
					</div>
					<div class="col-4">
						Dipolme préparé
						<select id="diplome" textarea="Selectionner dans la liste">
							<option value="">Selectionner dans la liste</option>
							<option value="gea">BUT GEA</option>
							<option value="info">BUT Informatique</option>
							<option value="qlio">BUT QLIO</option>
							<option value="cj">BUT CJ</option>
							<option value="infocom">BUT InfoCom</option>
						</select>
					</div>
					<div class="col-12">
						<label>Votre question :</label><br>
						<input type="text" name="question">
					</div>
					<div class="col-12">
						<input type="submit" value="Envoyer le formulaire">
					</div>
				</div>
			</div>
		</form>
		<?php
			
		?>
	</body>
</html>