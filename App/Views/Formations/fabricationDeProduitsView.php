<?php ob_start();?>
<main>
    <section class="headerFPBG container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-8 py-5">
                    <p class="formationsLabel greyP">Nos formations HACCP pour...</p>
                </div>
            </div>
            <div class="row d-flex flex-row-reverse">
                <div class="col-sm-9 col-md-8 pb-5">
                    <h1 class="formationsTitle text-center greyP">La Fabrication de Produits</h1>
                    <p class="text-center greyP">Fabrication de produits emballés, que ce soit un petit atelier ou une grosse industrie.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="info1 container-fluid">
        <p class="whiteP py-4 fw-bold text-center">Il vous faut une formation plus poussée sur la mise en place de la méthode HACCP</p>
    </div>

    <?php include "formFormation.php" ?>

    <section>
        <div class="container py-5">
            <h2 class="greyH2 text-center">Nos offres pour les formations HACCP pour les ateliers de fabrication</h2>
        </div>
        <div class="container-fluid mb-5">
            <div class="row d-flex justify-content-center">
                
            <?php
                foreach ($formationsFP as $value) {
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
                                <a href="<?=$this->router->generate('formations-delete',["id" => $value->getId(),"action" => "formations-display-FP"])."?token=".$_SESSION['token']?>" class="w-50">
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

    <section class="cadreC">
        <div class="container py-5">
            <h2 class="greyH2 text-center">Quel est le cadre des formations en hygiène pour les ateliers de fabrication ?</h2>
        </div>
        <div class="info1 container-fluid py-3">
            <p class="whiteP fw-bold text-center">De façon générale, toutes les personnes manipulant des denrées alimentaires doivent suivre des formations en hygiène alimentaire.</p>
            <p class="whiteP fw-bold text-center">Un texte de 2021 reprécise que ces formations aux principes de l'HACCP doivent être régulières.</p>
            <p class="whiteP fw-bold text-center">Par contre, aucun cadre légal ne définit les durées, objectifs ou contenus de ces formations.</p>
            <p class="whiteP fw-bold text-center">De plus, selon votre activité, vous ne pouvez pas vous appuyer sur un guide de bonnes pratiques existant.</p>
        </div>
        <div class="container pb-4">
            <div class="row py-5 d-flex align-items-center">
                <div class="col-lg-6 px-3">
                    <div class="listCadre">
                        <img src="<?= URL ?>Assets/Images/iconDraaf.png" alt="">
                        <p class="greyP ps-4">La simple application des Bonnes Pratiques d'Hygiène ne suffira pas, vous allez devoir mettre en place votre démarche HACCP de A à Z, ce qui n'est pas du tout aisé lorsqu'on n'a pas appris à le faire, et vous allez devoir justifier que vous maîtriser tout cela...</p>
                    </div>
                    <div class="listCadre">
                        <img src="<?= URL ?>Assets/Images/iconDraaf.png" alt="">
                        <p class="greyP ps-4">Détermination des dangers (biologiques, chimiques et physiques) à chaque étape d'un process, détermination des mesures, détermination des points critiques, etc... Nous abordons tous ces points techniques, pas à pas avec des exemples pratiques, dans nos formations pour vous aider à y voir plus clair</p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img class="imgLoi" src="<?= URL ?>Assets/Images/loiPortrait.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="rowBottom">
        <div class="container mb-5">
            <div class="row d-flex justify-content-evenly align-items-center">
                <div class="col-3 text-center divBulle whiteP">
                    <p class="fw-bold">Nos forces principales sont l'adaptation et notre connaissance des entreprises alimentaires</p>
                </div>
                <div class="col-1 divBetween"></div>
                <div class="col-3 text-center divBulle whiteP">
                    <p class="fw-bold">N'hésitez pas à nous contacter pour qu'on discute ensemble de vos besoins et qu'on réfléchisse ensemble aux solutions qui pourraient vous convenir</p>
                </div>
                <div class="col-1 divBetween"></div>
                <div class="col-3 text-center divBulle whiteP">
                    <p  class="fw-bold">Nous pourrons ensuite vous envoyer un programme de formation sur mesure</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
$titre = "Fabrication de produit";
$robot = "all";
$meta = "Vous souhaitez lancer des produits alimentaires sur le marché ? Nous avons une formation HACCP qui vous accompagnera pas à pas dans la démarche. Plusieurs options sont possibles pour un accompagnement à la carte.";
$content = ob_get_clean();
require_once "../App/Views/Layouts/templateRCView.php";