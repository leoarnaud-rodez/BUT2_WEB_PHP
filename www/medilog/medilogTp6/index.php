<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MEDILOG - Accueil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="cadre">
            <div class="row align-items-center">
                <div class="col-md-4 text-center text-md-start">
                    <img src="images/medicaments2.jpg" alt="Logo Médilog" class="logo-entete">
                </div>
                <div class="col-md-8 text-center">
                    <i class="fa fa-user-md fa-2x"></i>
                    <h1>APPLICATION<br>MEDILOG</h1>
                </div>
            </div>
            
            <div class="text-center mt-3 d-none d-lg-block">
                <h2><i class="fa fa-clinic-medical"></i> Présentation de l'application <i class="fa fa-clinic-medical"></i></h2>
                <div class="texte-grand">
                    Cette application permet aux médecins de générer une ordonnance avec une aide à la recherche de médicaments.
                </div>
            </div>
        </div>

        <div class="cadre p-0 overflow-hidden">
            <div class="row g-0">
                <div class="col-lg-3 col-12 p-3 d-flex align-items-center justify-content-center zone-mode-emploi">
                    <div class="texte-grand">
                        Mode d'emploi :<br><br>
                        Utiliser le menu en bas de la page pour naviguer dans les différentes rubriques.
                    </div>
                </div>
                <div class="col-lg-9 col-12 p-3 zone-icones d-none d-md-flex align-items-center">
                    <div class="row w-100 g-2 text-center">
                        <div class="col-4"><img src="images/CabinetMedical.png" alt="Cabinet Médical" class="icone-img"></div>
                        <div class="col-4"><img src="images/caducee.png" alt="Caducée" class="icone-img"></div>
                        <div class="col-4"><img src="images/croix.png" alt="Croix et maison" class="icone-img"></div>
                        <div class="col-4"><img src="images/steto.png" alt="Stéthoscope" class="icone-img"></div>
                        <div class="col-4"><img src="images/valise.png" alt="Valise secours" class="icone-img"></div>
                        <div class="col-4"><img src="images/medecin.png" alt="Médecin" class="icone-img"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-0">
            <div class="col-md-9">
                <div class="cadre text-center h-100">
                    <div class="menu-titre mb-2">
                        <i class="fa fa-sitemap"></i> Menu :
                    </div>
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
                        <a href="index.php" class="nav-link"><i class="fa fa-home"></i> Accueil</a>
                        <a href="pages/recherche.php" class="nav-link"><i class="fa fa-search"></i> Recherche d'un médicament</a>
                        <a href="pages/ordonnance.php" class="nav-link"><i class="fa fa-id-card"></i> Création ordonnance</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cadre text-center h-100">
                    <div class="fw-bold"><i class="fa fa-spinner"></i> Réalisé par</div>
                    <img src="images/LogoIut.png" alt="IUT de Rodez" class="logo-iut">
                </div>
            </div>
        </div>
    </div>
</body>
</html>