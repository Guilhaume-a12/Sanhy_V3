<?php ob_start(); ?>

<main>
    <section class="headerPlanningBG container-fluid">
        <div class="container">
            <div class="row">
                <div class="col py-5">
                    <h1 class="formationsTitle text-center greyP">Planning</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="underHeaderContact container-fluid">
        <p class="whiteP contactP fw-bold text-center">Découvrez toutes nos prochaines sessions !</p>
    </div>

    <?php
    if (isset($_SESSION['user'])) {
    ?>
        <section class="container pt-4">

            <div class="row d-flex justify-content-center">
                <div class="contactFormBG col-sm-10 col-lg-8 col-xl-6 py-4 px-4">
                    <form action="<?= $this->router->generate("planning-add") ?>" method="POST">
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-floating">
                                    <input class="inputBG form-control" name="d1" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);" required>
                                    <label class="labelColor" for="floatingInput">Jours 1</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input class="inputBG form-control mb-2" name="d2" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);">
                                    <label class="labelColor" for="floatingInput">Jours 2</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input class="inputBG form-control mb-2" name="d3" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);">
                                    <label class="labelColor" for="floatingInput">Jours 3</label>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-floating">
                                    <input class="inputBG form-control" name="month" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);" required>
                                    <label class="labelColor" for="floatingInputGrid">Mois</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input class="inputBG form-control mb-2" name="year" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);" required>
                                    <label class="labelColor" for="floatingInputGrid">Année</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input class="inputBG form-control" name="schedule" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);" required>
                                    <label class="labelColor" for="floatingInputGrid">Horaires</label>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-start">
                            <div class="col-md-5">
                                <div class="form-check">
                                    <input class="form-check-input" value="1" type="radio" name="place" id="flexRadioDefault1" checked>
                                    <label class="greyP form-check-label" for="flexRadioDefault1">
                                        Visio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="2" type="radio" name="place" id="flexRadioDefault2">
                                    <label class="greyP form-check-label" for="flexRadioDefault2">
                                        En salle
                                    </label>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="token" value="<?=$_SESSION['token']?>">

                        <div class="d-flex justify-content-center mb-4">
                            <button class="btnContact mt-3" type="submit">AJOUTER</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    <?php
    }
    ?>

    <section id="planningTarget" class="container py-3">
        <div class="row py-4 mt-4 d-flex justify-content-center planningDiv">
            <div class="col-lg-5">
                <h3 class="whiteP h3Planning text-start pb-2">Toutes nos formations en ligne</h3>
            </div>
            <div class="col-lg-5 d-flex justify-content-between">
                <p class="whiteP"><i class="bi bi-caret-right-fill whiteP"></i> Démarrez <span class="spanColorLight">quand vous voulez</span>, il suffit de nous appeler !</p>
            </div>
        </div>

        <div class="row py-4 my-4 d-flex justify-content-center planningDiv">
            <div class="col-lg-5">
                <p class="whiteP">Formation obligatoire de 14h :</p>
                <h3 class="whiteP h3Planning text-start pb-2">Nos sessions <span class="spanColorLight">en visio</span> sur ZOOM</h3>
            </div>
            <div class="col-lg-5">

                <?php
                $count1 = 0;
                if ($plannings) {
                    foreach ($plannings as $key => $value) {
                        if ($value->getId_place() == 1) {

                            $count1++;

                            if (empty($_SESSION['user'])) { ?>
                                <p class="whiteP pb-2">
                                    <i class="bi bi-caret-right-fill whiteP"></i> Le <span class="spanColorLight"><?= $value->getD1() . ', ' . $value->getD2() ?></span> et <span class="spanColorLight"><?= $value->getD3() . ' ' . $value->getMonth() . ' ' . $value->getYear() ?></span><?= ' ' . $value->getSchedule() ?>
                                </p>
                            <?php } else { ?>

                                <div class="d-flex" action="" method="">
                                    <a href="<?= $this->router->generate('planning-delete',["id" => $value->getId_planning()])."?token=".$_SESSION['token'] ?>" class="whiteP cross"><i class="bi bi-x-circle"></i></a>
                                    <p class="whiteP pb-2 ps-2">Le <span class="spanColorLight"><?= $value->getD1() . ', ' . $value->getD2() ?></span> et <span class="spanColorLight"><?= $value->getD3() . ' ' . $value->getMonth() . ' ' . $value->getYear() ?></span><?= ' ' . $value->getSchedule() ?></p>
                                </div>

                    <?php
                            }
                        }
                    }
                }
                if ($count1 == 0) {
                    ?>
                    <p><i class="bi bi-caret-right-fill whiteP"></i> Pas de session prévue pour le moment</p>
                <?php
                }
                ?>

            </div>
        </div>

        <div class="row py-4 mt-4 mb-5 d-flex justify-content-center planningDiv">
            <div class="col-lg-5">
                <p class="whiteP">Formation obligatoire de 14h :</p>
                <h3 class="whiteP h3Planning text-start pb-2"><span class="spanColorLight">En salle</span>, à Montpellier <span class="street">(8 rue Chaptal)</span></h3>
            </div>
            <div class="col-lg-5">
                <?php
                $count2 = 0;
                if ($plannings) {
                    foreach ($plannings as $key => $value) {
                        if ($value->getId_place() == 2) {

                            $count2++;

                            if (empty($_SESSION['user'])) { ?>
                                <p class="whiteP pb-2">
                                    <i class="bi bi-caret-right-fill whiteP"></i> Le <span class="spanColorLight"><?= $value->getD1() ?></span> et <span class="spanColorLight"><?= $value->getD2() . ' ' . $value->getMonth() . ' ' . $value->getYear() ?></span><?= ' ' . $value->getSchedule() ?>
                                </p>
                            <?php } else { ?>

                                <div class="d-flex">
                                    <a href="<?= $this->router->generate("planning-delete",["id" => $value->getId_planning()])."?token=".$_SESSION['token'] ?>" class="whiteP cross"><i class="bi bi-x-circle"></i></a>
                                    <p class="whiteP pb-2 ps-2">Le <span class="spanColorLight"><?= $value->getD1() ?></span> et <span class="spanColorLight"><?= $value->getD2() . ' ' . $value->getMonth() . ' ' . $value->getYear() ?></span><?= ' ' . $value->getSchedule() ?></p>
                                </div>

                    <?php
                            }
                        }
                    }
                }
                if ($count2 == 0) {
                    ?>
                    <p><i class="bi bi-caret-right-fill whiteP"></i> Pas de session prévue pour le moment</p>
                <?php
                }
                ?>

            </div>
        </div>

        <div class="row">
            <p class="text-center greyP mb-1">Besoin de plus d'information ?</p>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-end mb-5">
                <a href="tel:+33760436062" class="btnPlanning btn"><i class="bi bi-telephone-fill"></i></a>
            </div>
            <div class="col d-flex justify-content-start mb-5">
                <a href="mailto:contact@sanhy.fr" class="btnPlanning btn"><i class="bi bi-envelope-fill"></i></a>
            </div>
        </div>
    </section>
</main>



<?php
$titre = "Planning";
$robot = "all";
$meta = "Nous avons forcément le créneau qu'il vous faut pour votre formation HACCP, il n'y a plus qu'à prendre votre agenda puis nous appeler pour vous inscrire. Nos dates en présentiel, nos dates en visio, ou dès maintenant pour les formations en ligne.";
$content = ob_get_clean();
require_once "../App/Views/Layouts/templateView.php";
