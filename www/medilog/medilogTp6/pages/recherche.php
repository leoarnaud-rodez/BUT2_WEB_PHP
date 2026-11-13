<?php
	require '../medilogModele.php';

	$erreurBD = false; //true si la base de données est inaccessible

	if (isset($_POST['designation'])) {
		$designation = $_POST['designation'];
	} else {
		$designation = "";
	}

	if (isset($_POST['typeMedicament'])) {
		$typeChoisi = $_POST['typeMedicament'];
	} else {
		$typeChoisi = "";
	}

	if (isset($_POST['typeLaboratoire'])) {
		$laboChoisi = $_POST['typeLaboratoire'];
	} else {
		$laboChoisi = "";
	}

	try {
		$pdo = connecte();
	} catch(PDOException $e) {
		$erreurBD = true;
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MEDILOG - Recherche médicament (TP6)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="cadre">
            <div class="row align-items-center">
                <div class="col-md-4 text-center text-md-start">
                    <img src="../images/medicaments2.jpg" alt="Logo Médilog" class="logo-entete">
                </div>
                <div class="col-md-8 text-center">
                    <i class="fa fa-user-md fa-2x"></i>
                    <h1>APPLICATION<br>MEDILOG</h1>
                </div>
            </div>
            <div class="text-center mt-3">
                <h2><i class="fa fa-search"></i> Recherche d'un médicament <i class="fa fa-search"></i></h2>
            </div>
        </div>

        <div class="cadre">
            <h2>Recherche</h2>
            <form action="recherche.php" method="post">
                <div class="mb-3">
                    <label for="designation" class="form-label text-center d-block">Désignation à rechercher :</label>
                    <input type="text" class="form-control" id="designation" name="designation" value="<?php echo htmlentities($designation, ENT_QUOTES); ?>" placeholder="Tapez un mot à rechercher">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label text-center d-block">Type de médicament :</label>
                    <select class="form-select" id="type" name="typeMedicament">
                        <?php
                            if (!$erreurBD) {
                                try {
                                    $resultats = recupTypeMedicament($pdo);
                                    echo "<option value=''>Tous les types</option>";
                                    while ($ligne = $resultats->fetch()) {
                                        if ($ligne->Type == $typeChoisi) {
                                            echo "<option selected>";
                                        } else {
                                            echo "<option>";
                                        }
                                        echo htmlspecialchars($ligne->Type);
                                        echo "</option>";
                                    }
                                } catch(PDOException $e) {
                                    // rien comme ca liste vide
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="labo" class="form-label text-center d-block">Laboratoire :</label>
                    <select class="form-select" id="labo" name="typeLaboratoire">
                        <?php
                            if (!$erreurBD) {
                                try {
                                    $resultats = recupLaboratoire($pdo);
                                    echo "<option value=''>Tous les laboratoires</option>";
                                    while ($ligne = $resultats->fetch()) {
                                        if ($ligne->Labo == $laboChoisi) {
                                            echo "<option selected>";
                                        } else {
                                            echo "<option>";
                                        }
                                        echo htmlspecialchars($ligne->Labo);
                                        echo "</option>";
                                    }
                                } catch(PDOException $e) {
                                    // pareil, comme ca liste vide
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-light border w-100" value="Envoyer">
                </div>
            </form>
        </div>

        <div class="cadre">
            <h2>Résultat de la recherche</h2>
            <?php
                if (!$erreurBD) {
                    try {
                        $resultats = recupResultatRecherche($pdo, $designation, $typeChoisi, $laboChoisi);
                    } catch(PDOException $e) {
                        $erreurBD = true;
                    }
                }

                if ($erreurBD) {
            ?>
                <div class="text-center">
                    Les médicaments ne peuvent pas être affichés pour le moment, veuillez réessayer plus tard.
                </div>
            <?php } else { ?>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Désignation</th>
                            <th>Type</th>
                            <th>Labo</th>
                        </tr>
                        <?php
                            while ($ligne = $resultats->fetch()) {
                                echo "<tr>";
                                    echo "<td>".htmlspecialchars($ligne->Designation)."</td>";
                                    echo "<td>".htmlspecialchars($ligne->Type)."</td>";
                                    echo "<td>".htmlspecialchars($ligne->Lab)."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>
                </div>
            <?php } ?>
        </div>

        <div class="row g-0">
            <div class="col-md-9">
                <div class="cadre text-center h-100">
                    <div class="menu-titre mb-2">
                        <i class="fa fa-sitemap"></i> Menu :
                    </div>
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
                        <a href="../index.php" class="nav-link"><i class="fa fa-home"></i> Accueil</a>
                        <a href="recherche.php" class="nav-link"><i class="fa fa-search"></i> Recherche d'un médicament</a>
                        <a href="ordonnance.php" class="nav-link"><i class="fa fa-id-card"></i> Création ordonnance</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cadre text-center h-100">
                    <div class="fw-bold"><i class="fa fa-spinner"></i> Réalisé par</div>
                    <img src="../images/LogoIut.png" alt="IUT de Rodez" class="logo-iut">
                </div>
            </div>
        </div>
    </div>
</body>
</html>