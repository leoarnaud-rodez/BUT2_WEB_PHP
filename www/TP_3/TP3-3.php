<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Formulaire</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.2.0/css/fontawesome.min.css" integrity="sha384-mj4mLShEAyWi4Bui9LmFkAjPYWof6WrG8DfS8ebHhjm4/MClMqMMHpQzehNk5HeM" crossorigin="anonymous">
		<link rel="stylesheet" href="TP3.css">
	</head>
	<body>
		<?php
			if (isset($_POST['nom'])) {
				$leNom = $_POST['nom'];
			} else {
				$leNom = "";
			}
			if (isset($_POST['prenom'])) {
				$lePrenom = $_POST['prenom'];
			} else {
				$lePrenom = "";
			}
			if (isset($_POST['question'])) {
				$laQuestion = $_POST['question'];
			} else {
				$laQuestion = "";
			}
			if (isset($_POST['formation'])) {
				$laFormation = $_POST['formation'];
			} else {
				$laFormation = "";
			}
		?>
		<form method="post" action="TP3-3.php">
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
						Dipolme préparé<br>
						<select name="formation" textarea="Selectionner dans la liste">
							<option value="">Selectionner dans la liste</option>
							<option value="gea">BUT GEA</option>
							<option value="informatique">BUT Informatique</option>
							<option value="qlio">BUT QLIO</option>
							<option value="cj">BUT CJ</option>
							<option value="infocom">BUT InfoCom</option>
						</select>
					</div>
					<div class="col-12">
						<label>Votre question :</label><br>
						<textarea type="text" name="question"></textarea>
					</div>
					<div class="col-12">
						<input type="submit" value="Envoyer le formulaire">
					</div>
				</div>
			</div>
		</form>
		<div class="container">
			<div class="row mb-3">
				<div class="col-4">
					<?php
					    if (isset($_POST['nom'])) {
							$leNom = $_POST['nom'];
						} else {
							$leNom = "";
						}
						
						if (!empty($leNom)) {
							echo "<label class="."ok".">Votre nom : $leNom</label>";
						} else {
							echo "<label class="."erreur".">Merci de rentrer votre nom</label>";
						}
					?>
				</div>
				<div class="col-4">
					<?php
					    if (isset($_POST['prenom'])) {
							$lePrenom = $_POST['prenom'];
						} else {
							$lePrenom = "";
						}
						
						if (!empty($lePrenom)) {
							echo "<label class="."ok".">Votre prenom : $lePrenom</label>";
						} else {
							echo "<label class="."erreur".">Merci de rentrer votre prénom</label>";
						}
					?>
				</div>
				<div class="col-4">
					<?php
					    if (isset($_POST['formation'])) {
							$laFormation = $_POST['formation'];
						} else {
							$laFormation = "";
						}
						
						if (!empty($laFormation)) {
							echo "<label class="."ok".">Votre formation : $laFormation</label>";
						} else {
							echo "<label class="."erreur".">Merci de rentrer votre formation</label>";
						}
					?>
				</div>
				<div class="col-12">
					<?php
					    if (isset($_POST['question'])) {
							$laQuestion = $_POST['question'];
						} else {
							$laQuestion = "";
						}
						
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