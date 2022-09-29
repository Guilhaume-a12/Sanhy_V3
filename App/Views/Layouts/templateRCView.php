<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="<?= $robot ?>">
    <title><?= $titre ?></title>
    <meta name="description" content="<?= $meta ?>">

    <link rel="shortcut icon" type="image/png" href="<?=URL?>Assets/Images/logo_noBg.png"/>
    <link rel="stylesheet" href="<?= URL ?>Assets/Css/bootstrap.css">
    <link rel="stylesheet" href="<?= URL ?>Assets/Css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=URL?>Assets/Css/template.css">
    <link rel="stylesheet" href="<?= URL ?>Assets/Css/homepage.css">
    <link rel="stylesheet" href="<?= URL ?>Assets/Css/formations.css">
    <link rel="stylesheet" href="<?= URL ?>Assets/Css/propos_testez.css">
    <link rel="stylesheet" href="<?= URL ?>Assets/Css/contact_planning.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&family=Kalam&display=swap" rel="stylesheet">

</head>

<body class="noScroll">

    <header class="header sticky-top">

        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <?php if (!isset($_SESSION['user'])) {
                ?>
                    <a class="navbar-brand" href="<?=$this->router->generate('home')?>">
                        <img src="<?= URL ?>Assets/Images/logo_sanhy.jpg" alt="Sanhy Formation logo" class="navLogo">
                    </a>
                    <div class="d-flex flex-column justify-content-start sanhyDiv">
                        <p class="sanhyTitle">SANHY Formation</p>
                        <p class="sanhyUnderTitle">Sécurité Alimentaire, Nutrition, Hygiène</p>
                    </div>
                <?php
                }
                ?>
                <?php if (isset($_SESSION['user'])) {
                ?>
                    <a class="navbar-brand" href="<?=$this->router->generate('home')?>">
                        <img src="<?= URL ?>Assets/Images/iconPeda.png" alt="Image de profil" class="navLogo">
                    </a>
                <?php
                    echo htmlspecialchars($_SESSION['user']);
                }
                ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php if (isset($_SESSION['user'])) {
                        ?>
                            <li class="nav-item"><a class="navHover fw-bold nav-link px-3" href="<?=$this->router->generate('user-logout')?>">Déconnexion</a></li>
                        <?php
                        }
                        ?>
                        <li class="nav-item">
                            <a class="navHover fw-bold nav-link px-3" aria-current="page" href="<?=$this->router->generate('home')?>">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="navHover fw-bold nav-link px-3" href="<?=$this->router->generate('a-propos')?>">A propos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-3" role="button" data-bs-toggle="dropdown" href="#">Formations HACCP & Tarifs</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?=$this->router->generate('formations-display-RC')?>">Restauration commerciale</a></li>
                                <li><a class="dropdown-item" href="<?=$this->router->generate('formations-display-C')?>">Collectivités</a></li>
                                <li><a class="dropdown-item" href="<?=$this->router->generate('formations-display-MB')?>">Métiers de bouche</a></li>
                                <li><a class="dropdown-item" href="<?=$this->router->generate('formations-display-FP')?>">Fabrication de produits</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="navHover fw-bold nav-link px-3" href="<?=$this->router->generate('planning')?>">Planning</a>
                        </li>
                        <li class="nav-item">
                            <a class="navHover fw-bold nav-link px-3" href="<?= URL ?>contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <div class="loader">
        <span class="letter">C</span>
        <span class="letter">H</span>
        <span class="letter">A</span>
        <span class="letter">R</span>
        <span class="letter">G</span>
        <span class="letter">E</span>
        <span class="letter">M</span>
        <span class="letter">E</span>
        <span class="letter">N</span>
        <span class="letter">T</span>
    </div>

    <?= $content ?>

    <footer>

        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="col-10 col-sm-8 col-md-6 footerQualiopi py-3 text-center">
                    <img class="imgQualiopi" src="<?= URL ?>Assets/Images/logoQualiopi.webp" alt="Qualiopi processus certifié">
                </div>
            </div>

            <div class="row footerLinks">

                <div class="footerDiv col-sm-3 d-flex flex-column align-items-center">
                    <p>SANHY Formation, des formations HACCP engageantes pour tous</p>
                    <div class="footerSocial d-flex justify-content-around">
                        <a class="px-1" href="https://www.facebook.com/formation.haccp.hygiene.alimentaire"><i class="bi bi-facebook btnSocial"></i></a>
                        <a class="px-1" href="https://www.linkedin.com/in/sandrine-arnaud-formatrice-haccp/"><i class="bi bi-linkedin btnSocial"></i></a>
                    </div>
                </div>

                <div class="footerDiv col-sm-3">
                    <p class="fw-bold">Liens</p>
                    <ul>
                        <li><a href="<?=$this->router->generate('a-propos')?>">A propos</a></li>
                        <li><a href="<?=$this->router->generate('planning')?>">Dates sessions</a></li>
                        <li><a href="<?=$this->router->generate('mentions-legales')?>">Mentions légales</a></li>
                    </ul>
                </div>

                <div class="footerDiv col-sm-3">
                    <p class="fw-bold">Formations HACCP</p>
                    <ul>
                        <li><a href="<?=$this->router->generate('formations-display-RC')?>">Restauration commerciale</a></li>
                        <li><a href="<?=$this->router->generate('formations-display-C')?>">Collectivités</a></li>
                        <li><a href="<?=$this->router->generate('formations-display-MB')?>">Métiers de bouche</a></li>
                        <li><a href="<?=$this->router->generate('formations-display-FP')?>">Fabrication de produits</a></li>
                    </ul>
                </div>

                <div class="footerDiv col-sm-3">
                    <p class="fw-bold">Contactez - nous</p>
                    <ul>
                        <li>contact@sanhy.fr</li>
                        <li>07.60.43.60.62</li>
                        <li><a class="btnForm btn fw-bold" href="<?= URL ?>contact">Formulaire</a></li>
                    </ul>
                </div>

            </div>

            <div class="footerDiv row">
                <p class="copyright">Copyright © 2022. Tous droits réservés <b>SANHY Formation</b></p>
            </div>

        </div>

    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?= URL ?>Assets/Js/bootstrap.bundle.min.js"></script>
    <script src="<?= URL ?>Assets/Js/script.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>