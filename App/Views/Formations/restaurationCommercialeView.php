<?php ob_start(); ?>

<main>
    <section class="headerRCBG container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-8 py-5">
                    <p class="formationsLabel greyP">Nos formations HACCP pour...</p>
                </div>
            </div>
            <div class="row d-flex flex-row-reverse">
                <div class="col-sm-9 col-md-8 pb-5">
                    <h1 class="formationsTitle text-center greyP">La Restauration Commerciale</h1>
                    <p class="text-center greyP">Restaurants, snacks, salons de thé, food trucks, créperies, ambulants sur marchés...</p>
                </div>
            </div>
        </div>
    </section>
    <div class="info1 container-fluid">
        <p class="whiteP py-4 fw-bold text-center">Depuis 2012, tous les établissements de restauration commerciale doivent avoir une personne ayant suivi la formation obligatoire en hygiène alimentaire</p>
    </div>

    <?php include "formFormation.php" ?>

    <section>
        <div class="container py-5">
            <h2 class="greyH2 text-center">Nos offres pour la formation obligatoire de 14h</h2>
        </div>

        <!-- --------------------- CARDS --------------------- -->
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">

                <?php
                foreach ($formationsRC as $value) {
                ?>

                    <div class="cardsDiv col-xl-3 col-sm-6 col-12 py-4">
                        <div class="cardBorder">
                            <p class="cardTitle text-center fw-bold pt-2 pb-2"><?= $value->getTitle() ?></p>
                            <p class="cardTitle text-center fw-bold pb-2"><?= $value->getPrice()?><?php if($value->getPrice() !== "Tarif sur devis")echo "<i class='bi bi-currency-euro'></i>"?></p>
                            <div class="cardP px-4">
                                <div class="row">
                                    <div class="col-2 d-flex align-items-center">
                                        <i class="bi bi-chat-quote whiteP"></i>
                                    </div>
                                    <div class="col-10 d-flex align-items-center">
                                        <p class="whiteP text-start"><?= $value->getContent1() ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2 d-flex align-items-center">
                                        <i class="bi bi-chat-quote whiteP"></i>
                                    </div>
                                    <div class="col-10 d-flex align-items-center">
                                        <p class="whiteP text-start"><?= $value->getContent2() ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2 d-flex align-items-center">
                                        <i class="bi bi-chat-quote whiteP"></i>
                                    </div>
                                    <div class="col-10 d-flex align-items-center">
                                        <p class="whiteP text-start"><?= $value->getContent3() ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2 d-flex align-items-center">
                                        <i class="bi bi-chat-quote whiteP"></i>
                                    </div>
                                    <div class="col-10 d-flex align-items-center">
                                        <p class="whiteP text-start"><?= $value->getContent4() ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2 d-flex align-items-center">
                                        <i class="bi bi-chat-quote whiteP"></i>
                                    </div>
                                    <div class="col-10 d-flex align-items-center">
                                        <p class="whiteP text-start"><?= $value->getContent5() ?></p>
                                    </div>
                                </div>
                                <?php
                                if ($value->getContent6() !== null) {
                                ?>
                                    <div class="row">
                                        <div class="col-2 d-flex align-items-center">
                                            <i class="bi bi-chat-quote whiteP"></i>
                                        </div>
                                        <div class="col-10 d-flex align-items-center">
                                            <p class="whiteP text-start"><?= $value->getContent6() ?></p>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <?php 
                            if (isset($_SESSION['user'])) {
                            ?>
                            <div class="d-flex w-100">
                                <a href="<?=$this->router->generate('formations-delete',["id" => $value->getId(),"action" => "formations-display-RC"])."?token=".$_SESSION['token']?>" class="w-50">
                                    <div class="cardBtn2 py-3 text-center">
                                        SUPPRIMER
                                    </div>
                                </a>
                                <a href="<?=$this->router->generate('formations-modify',["id" => $value->getId()])?>" class="w-50">
                                    <div class="cardBtn3 py-3 text-center">
                                        MODIFIER
                                    </div>
                                </a>
                                </div>
                            <?php
                            } else {
                            ?>
                                <form action="<?=$this->router->generate('contact-inscription')?>" method="POST">
                                    <input type="hidden" name="title" value="<?=$value->getTitle()?>">
                                    <input type="hidden" name="sector" value="<?=$value->getId_sector()?>">
                                    <button class="cardBtn py-3 text-center">
                                        INSCRIPTION
                                    </button>
                                </form>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                <?php
                }
                ?>

            </div>
        </div>

    </section>

    <section>
        <div class="container py-5">
            <h2 class="greyH2 text-center">Quel est le cadre de la formation obligatoire?</h2>
        </div>
        <div class="info1 container-fluid py-3">
            <p class="whiteP fw-bold text-center">De façon générale, toutes les personnes manipulant des denrées alimentaires doivent suivre des formations en hygiène alimentaire.</p>
            <p class="whiteP fw-bold text-center"> Mais il n'y a que dans le secteur de la restauration commerciale, qu'un cadre précis est définit par la règlementation :</p>
        </div>
        <div class="container">
            <div class="row py-5 d-flex align-items-center">
                <div class="col-lg-6 px-3">
                    <div class="listCadre">
                        <img src="<?= URL ?>Assets/Images/iconPersonne.png" alt="">
                        <p class="greyP ps-4">Au moins une personne doit avoir la certification dans chaque établissement (sauf éxonération spécifique, à savoir la possession d'un diplôme reconnu dans l'arrêté du 25 novembre 2011 et obtenu après 2006, ou 3 ans d'expérience en tant que gérant(e) d'un établissement du secteur)</p>
                    </div>
                    <div class="listCadre">
                        <img src="<?= URL ?>Assets/Images/iconHorloge.png" alt="">
                        <p class="greyP ps-4">Cette formation a une durée de 14h</p>
                    </div>
                    <div class="listCadre">
                        <img src="<?= URL ?>Assets/Images/iconObjectif.png" alt="">
                        <p class="greyP ps-4">Objectifs et contenu définis par la loi</p>
                    </div>
                    <div class="listCadre">
                        <img src="<?= URL ?>Assets/Images/iconDraaf.png" alt="">
                        <p class="greyP ps-4">Dispensée par un organisme de formation enregistré auprès de la DRAAF et disposant donc d'un numéro ROFHYA</p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img class="imgLoi" src="<?= URL ?>Assets/Images/loi.webp" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="sectionSimulationBG d-flex flex-column align-items-center">
        <h2 class="whiteP text-center py-5">Vous n'êtes pas sûr(e) d'être concerné(e)?</h2>
        <p class="whiteP text-center py-1 px-2 fw-bold textSimu">Faites notre simulation pour répondre à votre cas personnel</p>
        <iframe src="http://127.0.0.1/sanhy_V2/Module/index.html" allow="fullscreen">

        </iframe>
    </section>

    <section class="sectionPermisBG d-flex flex-column justify-content-between align-items-center">
        <img src="<?= URL ?>Assets/Images/wavesBot.svg" alt="">
        <h2 class="titlePermis text-center py-5 mx-5">Si vous réalisez également des ventes d'alcool à consommer sur place...</h2>
        <div class="container d-flex justify-content-center">
            <div class="col-sm-8 d-flex flex-column align-items-center p-5 mb-5 divPermisBG">
                <h3 class="whiteP text-center">Formation permis d'exploitation</h3>
                <p class="whiteP text-center py-4">
                    Sont concernées, toutes les personnes souhaitant exploiter un établissement pourvu de la licence IV ou de la licence III.
                    Sont aussi concernés les exploitants d'un établissement doté de la "licence restaurant" (petite ou grande).
                </p>
                <p class="whiteP text-center pb-4">
                    Cette formation est réalisée par notre partenaire ALVEA Formation, organisme agréé par le ministère de l'intérieur,
                    dont les formateurs diplômés en droit vous donneront des contenus de qualité !
                </p>
                <a href="https://permis-exploitation-france.fr" target="_blank" class="btnSection1 btn">En savoir plus</a>
            </div>
        </div>
        <img class="imgBot" src="<?= URL ?>Assets/Images/wavesFooterTop.svg" alt="">
    </section>
</main>


<?php
$titre = "Restauration commerciale";
$robot = "all";
$meta = "Formation obligatoire HACCP de 14h certifiante pour la restauration commerciale : lancez notre simulation pour savoir si vous êtes concerné.e selon votre cas personnel.";
$content = ob_get_clean();
require_once "../App/Views/Layouts/templateRCView.php";
