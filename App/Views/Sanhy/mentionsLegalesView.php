<?php ob_start(); ?>

<main>
    <section class="headerMentionsBG container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-8 py-5">
                    <p class="formationsLabel greyP"></p>
                </div>
            </div>
            <div class="row d-flex flex-row-reverse">
                <div class="col-sm-9 col-md-8 pb-5">
                    <h1 class="formationsTitle text-center greyP">Informations Légales</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="underHeaderContact container-fluid">
        <p class="whiteP contactP fw-bold text-center">Retrouvez ici les informations légales</p>
    </div>

    <section class="container">
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
        <div class="row">
            <div class="col">
                <h2 class="greyH2 text-center pb-2 mt-5">Propriétaire</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 ">
                <p class="">EIRL Sandrine ARNAUD - SANHY Formation - 250 chemin des peyridisses - 34980 Combaillaux, ci-après "SANHY Formation"</p>
                <p class="">SIRET : 808 350 805 00038 Code APE : 85.59B</p>
                <p class="">Organisme de formation enregistré auprès de la DREETS Occitanie sous le n° de <span class="greyP fw-bold">déclaration d'activité 91 34 08473 34</span>, cet enregistrement ne vaut pas agrément de l'Etat</p>
                <p class="">EIRL Sandrine ARNAUD est enregistrée auprès des DRAAF de toutes les régions de France (inscription au <span class="greyP fw-bold">ROFHYA</span>) pour dispenser la formation hygiène alimentaire en restauration commeriale</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2 class="greyH2 text-center pb-2 mt-5">Créatrice du site</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <p class="">Sandrine ARNAUD</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2 class="greyH2 text-center pb-2 mt-5">Responsable publication</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <p class="">Sandrine ARNAUD - sandrine.arnaud@sanhy.fr</p>
                <p class="">Le responsable publication est une personne physique</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2 class="greyH2 text-center pb-2 mt-5">Webmaster</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <p class="">Sandrine ARNAUD - sandrine.arnaud@sanhy.fr</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2 class="greyH2 text-center pb-2 mt-5">Hébergeur</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <p class="">OVH – 2 rue Kellermann – BP 80157 59053 ROUBAIX CEDEX 1</p>
                <!-- TODO hebergeur à modifier -->
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2 class="greyH2 text-center pb-2 mt-5">Crédits et droits d'auteure</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <p class="">Crédits image et vidéos sur l'ensemble du site : Droits réservés</p>
                <p class="">Auteure des textes sur l'ensemble du site : Sandrine ARNAUD - © Textes protégés par le droit d’auteur</p>
                <p class="">L'auteure se réserve la possibilité de poursuivre toute infraction</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2 class="greyH2 text-center pb-2 mt-5">Conditions genérales de vente et de formation</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <!-- TODO Design à modifier -->
                <form action="<?=$this->router->generate('mentions-legales-cgv')?>" method="POST" target="blank">
                    <button class="btnCgv btn" name="downloadCgv">LIRE LE PDF DES CGV</button>
                </form>
            </div>
        </div>

    </section>
</main>

<?php
$titre = "Mentions Légales";
$robot = "all";
$meta = "Vous trouverez ici, toutes les informations légales sur SANHY Formation.";
$content = ob_get_clean();
require_once "../App/Views/Layouts/templateView.php";