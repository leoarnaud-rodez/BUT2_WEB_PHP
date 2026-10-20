<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MEDILOG - Recherche médicament</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container-fluid">
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
            <form action="recherche.html" method="post">
                <div class="mb-3">
                    <label for="designation" class="form-label text-center d-block">Désignation à rechercher :</label>
                    <input type="text" class="form-control" id="designation" placeholder="Tapez un mot à rechercher">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label text-center d-block">Type de médicament :</label>
                    <?php 
						require '../medilogModele.php';

						try{
							$pdo = connecte();
							$resultats = recupTypeMedicament($pdo);
							
								echo "<select class='form-select' name='typeMedicament'>" ;																
								
								while($ligne = $resultats->fetch() ) { 									
									echo "<option>";															
										echo "<value>".$ligne->Type;						
									echo "</option>";															
								}
								echo "</select>" ;		
							
						}catch(PDOException $e){
							//Il y a eu une erreur 
							echo "<h1>Erreur BD ".$e->getMessage();
						}
					?>
                </div>
                <div class="mb-3">
                    <label for="labo" class="form-label text-center d-block">Laboratoire :</label>
                    <?php 

						try{
							$resultats = recupLaboratoire($pdo);
							
								echo "<select class='form-select' name='typeLaboratoire'>" ;																
								
								while($ligne = $resultats->fetch() ) { 									
									echo "<option>";															
										echo "<value>".$ligne->Labo;						
									echo "</option>";															
								}
								echo "</select>" ;		
							
						}catch(PDOException $e){
							//Il y a eu une erreur 
							echo "<h1>Erreur BD ".$e->getMessage();
						}
					?>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-light border w-100" value="Envoyer">
                </div>
            </form>
        </div>

        <div class="cadre">
            <h2>Résultat de la recherche</h2>
            <div class="table-responsive">
				<?php 

					try{
						$resultats = recupResultatRecherche($pdo);
						
							echo "<select class='form-select'>" ;																
							
							while($ligne = $resultats->fetch() ) { 									
								echo "<option>";															
									echo "<value>".$ligne->Type;						
								echo "</option>";															
							}
							echo "</table>" ;	
						echo "</div>";	
						
					}catch(PDOException $e){
						//Il y a eu une erreur 
						echo "<h1>Erreur BD ".$e->getMessage();
					}
				?>
            </div>
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