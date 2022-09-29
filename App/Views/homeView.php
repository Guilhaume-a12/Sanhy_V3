<?php ob_start(); ?>

<main>
<?php
    if (!empty($_SESSION['alert'])) {
    ?>
        <div class="container mt-3">
            <div class="alert alert-<?= $_SESSION['alert']['type'] ?> text-center">
                <?= $_SESSION['alert']['msg'] ?>
            </div>
        </div>
    <?php
        unset($_SESSION['alert']);
    }
    ?>
    <section class="headerBG container-fluid pt-4">
        <div class="container-md">
            <div class="row d-flex justify-content-around">
                <div class="fullTitle col-lg-7 d-flex flex-column justify-content-evenly align-items-center mb-5">
                    <!-- <div class="sanhyFormation d-flex align-items-end mb-5">
                        <img class="logoHeader" src="images/logo_sanhy.jpg" alt="Sanhy Formation Logo">
                        <div class="d-flex flex-column justify-content-start">
                            <p class="sanhyTitle">SANHY Formation</p>
                            <p class="sanhyUnderTitle">Sécurité Alimentaire, Nutrition, Hygiène</p>
                        </div>
                    </div> -->
                    <div>
                        <h1 class=" headerH1 text-center d-flex align-items-center">Des formations HACCP engageantes pour tous !</h1>
                    </div>
                </div>
                <div class="divImgHeader col-sm-5">
                    <!-- div img background with internal shadow -->
                </div>
            </div>
            <!-- TODO centrer le btn header -->
            <div class="row mt-5">
                <div class="btnInitial col-md-3 d-flex justify-content-around px-0">
                    <a class="btnHeader btn" href="<?=$this->router->generate('formations-display-RC')?>">Restauration commerciale</a>
                    <a class="btnHeader btn" href="<?=$this->router->generate('formations-display-C')?>">Collectivités</a>
                </div>
                <div class="btnInitial col-md-3 d-flex justify-content-around px-0">
                    <a class="btnHeader btn" href="<?=$this->router->generate('formations-display-MB')?>">Métiers de bouche</a>
                    <a class="btnHeader btn" href="<<?=$this->router->generate('formations-display-FP')?>">Fabrication de produits</a>
                </div>
                <div class="btnResponsive col-md-12 d-flex justify-content-evenly">
                    <a class="btnHeader btn" href="<?=$this->router->generate('formations-display-RC')?>">Restauration commerciale</a>
                    <a class="btnHeader btn" href="<?=$this->router->generate('formations-display-C')?>">Collectivités</a>
                    <a class="btnHeader btn" href="<?=$this->router->generate('formations-display-MB')?>">Métiers de bouche</a>
                    <a class="btnHeader btn" href="<?=$this->router->generate('formations-display-FP')?>">Fabrication de produits</a>
                </div>
            </div>
        </div>
    </section>

    <div class="underHeader container-fluid">

    </div>

    <section>
        <div class="container pt-4">
            <div class="row">
                <div class="col">
                    <h2 class="greyH2 text-center">Bienvenue dans notre centre de formation spécialisé dans l'HACCP et la sécurité alimentaire</h2>
                </div>
            </div>
        </div>
        <!-- SECTION 1 "BIENVENUE..." INITIAL -->
        <div class="section1BG container-fluid">
            <div class="container pt-5">
                <div class="row pt-5">
                    <div class="imgSection1Div col-lg-4 pt-4">
                        <img class="imgSection1" src="<?=URL?>Assets/Images/cuisinierContent.webp" alt="cuisinier normes HACCP">
                    </div>
                    <div class="section1DivP col-lg-8 pt-4 d-flex flex-column align-items-center">
                        <h3 class="section1H3 text-center pb-3">Suivre une formation HACCP de façon agréable, c'est possible!</h3>
                        <p class="section1P text-center pb-4">Si suivre une formation obligatoire en HACCP ne vous enthousiasme pas, vous êtes au bon endroit!</br>A nous de vous faire changer d'avis et de vous faire passer un bon moment, tout en apprenant des choses essentielles!</p>
                        <div class="row">
                            <div class="col-7 d-flex align-items-center">
                                <h3 class="section1H3 text-end pb-2">Venez essayer par vous même et testez vos connaissances :</h3>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <a class="btnHeader btn" href="<?=$this->router->generate('testez-vous')?>">TESTEZ VOUS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SECTION 1 "BIENVENUE..." RESPONSIVE -->
        <div class="section1BGv2 container-fluid mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 pt-4 d-flex flex-column align-items-center">
                        <h3 class="section1H3 text-center pb-3">Suivre une formation HACCP de façon agréable, c'est possible!</h3>
                        <p class="section1P text-center pb-4">Si suivre une formation obligatoire en HACCP ne vous enthousiasme pas, vous êtes au bon endroit!</br>A nous de vous faire changer d'avis et de vous faire passer un bon moment, tout en apprenant des choses essentielles!</p>
                        <h3 class="section1H3 text-center">Venez essayer par vous même et testez vos connaissances!</h3>
                        <a class="btnHeader btn" href="<?=$this->router->generate('testez-vous')?>">TESTEZ VOUS</a>
                    </div>
                    <div class="col-lg-4 pt-4 d-flex justify-content-center">
                        <img class="imgSection1" src="images/HACCP_agreableSquare.jpg" alt="cuisinier normes HACCP">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h2 class="greyH2 text-center">Secteurs concernés par nos formations HACCP</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="cardSection2 col-lg-3 col-sm-6">
                    <div class="imgSection2 imgRC my-5">
                        <a href="<?=$this->router->generate('formations-display-RC')?>">
                            <img class="img1" src="<?=URL?>Assets/Images/restaurationCommercialeCarre.webp" alt="">
                        </a>
                    </div>
                    <h3 class="section2H3 pb-4">RESTAURATION COMMERCIALE</h3>
                    <p class="greyP text-center">Restaurants, snacks, salons de thé, food trucks, crêperies, ambulants sur marchés, ...</p>
                </div>
                <div class="cardSection2 col-lg-3 col-sm-6">
                    <div class="imgSection2 imgRC my-5">
                        <a href="<?=$this->router->generate('formations-display-C')?>">
                            <img class="img1" src="<?=URL?>Assets/Images/collectivitesCarre.webp" alt="">
                        </a>
                    </div>
                    <h3 class="section2H3 pb-4">COLLECTIVITES</h3>
                    <p class="greyP text-center">Crèches, micro-crèches, EPHAD, restaurants d'entreprise, ...</p>
                </div>
                <div class="cardSection2 col-lg-3 col-sm-6">
                    <div class="imgSection2 imgRC my-5">
                        <a href="<?=$this->router->generate('formations-display-MB')?>">
                            <img class="img1" src="<?=URL?>Assets/Images/metiersDeBoucheCarre.webp" alt="">
                        </a>
                    </div>
                    <h3 class="section2H3 pb-4">METIERS DE BOUCHE</h3>
                    <p class="greyP text-center">Poissoneries, boucheries, traiteurs, boulangeries pâtisseries, ...</p>
                </div>
                <div class="cardSection2 col-lg-3 col-sm-6">
                    <div class="imgSection2 imgRC my-5">
                        <a href="<?=$this->router->generate('formations-display-FP')?>">
                            <img class="img1" src="<?=URL?>Assets/Images/fabricationDeProduitCarre.webp" alt="">
                        </a>
                    </div>
                    <h3 class="section2H3 pb-4">FABRICATION DE PRODUIT</h3>
                    <p class="greyP text-center">Fabrication de produits emballés, que ce soit un petit atelier ou une grosse industrie.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section3BG container-fluid mt-5 pt-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="whiteH2 text-center pb-5">Nos modalités</h2>
                </div>
            </div>
            <div class="row">
                <div class="section3PE col-lg-6 pe-5">
                    <div>
                        <div>
                            <div class="d-flex justify-content-around pb-3">
                                <div>
                                    <div class="iconDiv">
                                        <img class="iconPng" src="<?=URL?>Assets/Images/iconIntra.png" alt="">
                                    </div>
                                    <p class="whiteP text-center pt-2">INTRA entreprise</p>
                                </div>
                                <div>
                                    <div class="iconDiv">
                                        <img class="iconPng" src="<?=URL?>Assets/Images/iconInter.png" alt="">
                                    </div>
                                    <p class="whiteP text-center pt-2">INTER entreprise</p>
                                </div>
                            </div>
                            <p class="whiteP text-center fw-bold pb-5">Hérault et départements limitrophes</p>
                        </div>
                    </div>
                </div>
                <div class="section3PS col-lg-6 ps-5">
                    <div>
                        <div>
                            <div class="d-flex justify-content-around pb-3">
                                <div>
                                    <div class="iconDiv">
                                        <img class="iconPng" src="<?=URL?>Assets/Images/iconVisio.png" alt="">
                                    </div>
                                    <p class="whiteP text-center pt-2">En visio</p>
                                </div>
                                <div>
                                    <div class="iconDiv">
                                        <img class="iconPng" src="<?=URL?>Assets/Images/iconElearning.png" alt="">
                                    </div>
                                    <p class="whiteP text-center pt-2">En ligne</p>
                                </div>
                            </div>
                            <p class="whiteP text-center fw-bold pb-5">Partout dans le monde!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section4BG pb-4 container-fluid">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h2 class="greyH2 text-center pb-5">Avez-vous envisagé l'e-learning?</h2>
                </div>
            </div>
            <div class="row">
                <div class="imgElearningDiv col-md-6">
                    <img class="imgElearning pb-4" src="<?=URL?>Assets/Images/tablette.jpeg" alt="formation HACCP e-learning">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center pb-4 px-5">
                    <p class="greyP text-center">De chez vous, à votre rythme, moins coûteux, tout en gardant un suivi par une formatrice compétente, ingénieure en agroalimentaire.</p>
                    <p class="greyP text-center py-3">Ou, pour les salarié(e)s, sur un poste informatique dans votre établissement.</p>
                    <p class="greyP text-center">Déjà plus de 5000 personnes nous ont fait confiance pour suivre leur formation en e-learning.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section5BG">
        <div class="container pt-5">
            <div class="row">
                <div class="col">
                    <h2 class="greyH2 text-center pb-5">Pourquoi nous choisir?</h2>
                </div>
            </div>
            <div class="row d-flex flex-column align-items-center pt-5">
                <div class="col-md-7 d-flex align-items-center pb-5 pedaReverse" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <p class="PPeda text-end ps-5">Variété, jeux, interactions, ... Plus c'est ludique, mieux on apprend!</p>
                    <div class="iconPedaDiv">
                        <img class="iconPeda" src="<?=URL?>Assets/Images/dessin-pedagogie.svg" alt="Pédagogie">
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-column align-items-center">
                <div class="col-md-7 d-flex align-items-center pb-5 peda" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <div class="iconPedaDiv">
                        <img class="iconPeda" src="<?=URL?>Assets/Images/dessin-adaptation.svg" alt="Pédagogie">
                    </div>
                    <p class="PPeda text-start pe-5">Nos modules sont adaptés à votre secteur. Et c'est à la carte si on vient chez vous!</p>
                </div>
            </div>
            <div class="row d-flex flex-column align-items-center">
                <div class="col-md-7 d-flex align-items-center pb-5 pedaReverse" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <p class="PPeda text-end ps-5">La sécurité alimentaire, c'est un métier. Nos intervenantes sont des Ingénieures en Agroalimentaires.</p>
                    <div class="iconPedaDiv">
                        <img class="iconPeda" src="<?=URL?>Assets/Images/dessin-professionnalisme.svg" alt="Pédagogie">
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-column align-items-center">
                <div class="col-md-7 d-flex align-items-center pb-5 peda" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <div class="iconPedaDiv">
                        <img class="iconPeda" src="<?=URL?>Assets/Images/dessin-qualiopi.png" alt="Pédagogie">
                    </div>
                    <p class="PPeda text-start pe-5">Nous sommes certifiés. La prise en charge financière est donc possible avec votre OPCO.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="p99 text-center greyP">Et ... 99% de personnes satisfaites!</p>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-12 m-auto divCarou">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="4000">
                                <div class="testCarou m-auto">
                                    <p class="blueGreenP"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                    <p class="greyP">Très belle expérience de formation ! Des contenus riches et variés qui stimulent notre attention et facilitent l'apprentissage. Une formatrice bienveillante, encourageante et très professionnelle. Un grand merci pour la qualité de vos formations et votre bonne humeur qui ne gâche rien !</p>
                                    <p class="fw-bold">Cécile D.</p>
                                    <p><i>Formation inter-entreprise - 2021</i></p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <div class="testCarou m-auto">
                                    <p class="blueGreenP"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                    <p class="greyP">Une voix très agréable à écouter, des diapos bien construite et claire, avec des traits d'humour parfois qui font mouche. Rien à dire, je pensais que ca allait être la barbe, et au final cette formation m'a appris pleins de choses et c'était ludique en plus de ça. Ne changez rien !</p>
                                    <p class="fw-bold">Quentin  C.</p>
                                    <p><i>Formation e-learning - 2022</i></p>
                                </div>
                            </div>
                            <div class="carousel-item text-start" data-bs-interval="4000">
                                <div class="testCarou m-auto">
                                    <p class="blueGreenP"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                    <p class="greyP">Nous avons pu bénéficier de l'accompagnement, des conseils et d'une formation de qualité auprès de Sandrine. Nous l'en remercions chaque jour ! Surtout, son implication et sa gentillesse sont à souligner, bref, une grande professionnelle que je recommande chaudement. </p>
                                    <p class="fw-bold">Coline D.</p>
                                    <p><i>Formation intra-entreprise - 2020</i></p>
                                </div>
                            </div>
                            <div class="carousel-item text-start" data-bs-interval="4000">
                                <div class="testCarou m-auto">
                                    <p class="blueGreenP"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                    <p class="greyP">Un réel plaisir d'échanger avec Sandrine que ce soit dans la préparation du projet ou dans la formation en elle-même. Une formatrice qui analyse notre site avec nous, qui prend en compte nos besoins et nos équipes. Merci !</p>
                                    <p class="fw-bold">Grotte de Clamouse</p>
                                    <p><i>Formation intra-entreprise - 2022</i></p>
                                </div>
                            </div>
                            <div class="carousel-item text-start" data-bs-interval="4000">
                                <div class="testCarou m-auto">
                                    <p class="blueGreenP"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                    <p class="greyP">Formation plaisante et dynamique même en restant à la maison grâce aux modules qui ne contiennent pas que de la lecture, j'ai apprécié également les reportages qui nous implique réellement dans ce milieu . Cette expérience était super avec une professionnelle Sandrine Arnaud qui maitrise parfaitement le sujet je recommande vivement.</p>
                                    <p class="fw-bold">Florent D.</p>
                                    <p><i>Formation e-learning - 2022</i></p>
                                </div>
                            </div>
                            <div class="carousel-item text-start" data-bs-interval="4000">
                                <div class="testCarou m-auto">
                                    <p class="blueGreenP"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                    <p class="greyP">Sincèrement, je ne m'attendais pas à apprécier cette formation et pourtant je la quitte à regret! La voix de la formatrice est posée, douce et tranquille. Le contact via chat est idéal: les questions des uns et des autres sont directement accessibles, les réponses de Madame Arnaud sont ultra rapides et précises. Les supports sont variés et ludiques, les explications sont claires et détaillées. Merci encore, et tout particulièrement au talent de conteuse de Mme Arnaud :)</p>
                                    <p class="fw-bold">Marion V.</p>
                                    <p><i>Formation e-learning - 2022</i></p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php
$titre = "Sanhy Formation";
$robot = "all";
$meta = "Des formations hygiène et HACCP pour tous les secteurs, que ce soit à distance (en ligne ou en visio) ou en présentiel, assurées par des ingénieures en Agroalimentaire. Prise en charge financière possible à 100%";
$content = ob_get_clean();
require_once "Layouts/templateView.php";
