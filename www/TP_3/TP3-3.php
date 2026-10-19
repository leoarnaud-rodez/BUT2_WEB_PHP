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

			if (isset($_POST['formation'])) {
				$laFormation = $_POST['formation'];
			} else {
				$laFormation = "";
			}

			if (isset($_POST['question'])) {
				$laQuestion = $_POST['question'];
			} else {
				$laQuestion = "";
			}

			// Vérification si toutes les données sont valides
			if (!empty($leNom) && !empty($lePrenom) && !empty($laFormation) && !empty($laQuestion)) {
		?>
				<div class="container">
					<div class="row mb-3">
						<div class="col-4">
							<?php echo '<label class="ok">Votre Nom : '.htmlspecialchars($leNom).'</label>'; ?>
						</div>
						<div class="col-4">
							<?php echo '<label class="ok">Votre Prénom : '.htmlspecialchars($lePrenom).'</label>'; ?>
						</div>
						<div class="col-4">
							<?php
								if ($laFormation == "gea") { $nomFormation = "BUT GEA"; }
								if ($laFormation == "informatique") { $nomFormation = "BUT Informatique"; }
								if ($laFormation == "qlio") { $nomFormation = "BUT QLIO"; }
								if ($laFormation == "cj") { $nomFormation = "BUT CJ"; }
								if ($laFormation == "infocom") { $nomFormation = "BUT InfoCom"; }
								echo '<label class="ok">Votre Diplôme : '.htmlspecialchars($nomFormation).'</label>';
							?>
						</div>
						<div class="col-12">
							<?php echo '<label class="ok">Votre question : '.htmlspecialchars($laQuestion).'</label>'; ?>
						</div>
					</div>
				</div>
		<?php
			} else {
		?>
				<form method="post" action="TP3-3.php">
					<div class="container">
						<div class="row mb-3">
							<div class="col-12">
								<h1>Formulaire</h1>
							</div>
							<div class="col-4">
								<?php
									if (!empty($leNom)) {
										echo '<label class="ok">Nom :</label>';
									} else {
										echo '<label class="erreur">Nom :</label>';
									}
								?>
								<br>
								<input type="text" name="nom" value="<?php echo htmlspecialchars($leNom); ?>">
							</div>
							<div class="col-4">
								<?php
									if (!empty($lePrenom)) {
										echo '<label class="ok">Prénom :</label>';
									} else {
										echo '<label class="erreur">Prénom :</label>';
									}
								?>
								<br>
								<input type="text" name="prenom" value="<?php echo htmlspecialchars($lePrenom); ?>">
							</div>
							<div class="col-4">
								<?php
									if (!empty($laFormation)) {
										echo '<label class="ok">Diplôme préparé :</label>';
									} else {
										echo '<label class="erreur">Diplôme préparé :</label>';
									}
								?>
								<br>
								<select name="formation">
									<option value="" <?php if ($laFormation == "") { echo "selected"; } ?>>Sélectionner dans la liste</option>
									<option value="gea" <?php if ($laFormation == "gea") { echo "selected"; } ?>>BUT GEA</option>
									<option value="informatique" <?php if ($laFormation == "informatique") { echo "selected"; } ?>>BUT Informatique</option>
									<option value="qlio" <?php if ($laFormation == "qlio") { echo "selected"; } ?>>BUT QLIO</option>
									<option value="cj" <?php if ($laFormation == "cj") { echo "selected"; } ?>>BUT CJ</option>
									<option value="infocom" <?php if ($laFormation == "infocom") { echo "selected"; } ?>>BUT InfoCom</option>
								</select>
							</div>
							<div class="col-12">
								<?php
									if (!empty($laQuestion)) {
										echo '<label class="ok">Votre question :</label>';
									} else {
										echo '<label class="erreur">Votre question :</label>';
									}
								?>
								<br>
								<textarea name="question"><?php echo htmlspecialchars($laQuestion); ?></textarea>
							</div>
							<div class="col-12">
								<input type="submit" value="Envoyer le formulaire">
							</div>
						</div>
					</div>
				</form>
		<?php
			}
		?>
	</body>
</html>