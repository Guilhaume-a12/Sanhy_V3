<?php ob_start(); ?>

<main>
    <section class="headerCBG container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-8 py-5">
                    <p class="formationsLabel greyP">Zone de modification de...</p>
                </div>
            </div>
            <div class="row d-flex flex-row-reverse">
                <div class="col-sm-9 col-md-8 pb-5">
                    <h1 class="formationsTitle text-center greyP"><?=$formationId->getTitle()?></h1>
                    <p class="text-center greyP">
                        <?php 
                            switch($formationId->getId_sector()) {
                                case 1:
                                    echo "Du secteur : Restauration Commerciale";
                                    break;
                                case 2:
                                    echo "Du secteur : Collectivités";
                                    break;
                                case 3:
                                    echo "Du secteur : Métiers de bouche";
                                    break;
                                case 4:
                                    echo "Du secteur : Fabrication de produits";
                                    break;
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="info1 container-fluid">
        <p class="whiteP py-4 fw-bold text-center">Ici tu peux modifier seulement ce qui est nécessaire</p>
    </div>

    <section class="container pt-4">

<div class="row d-flex justify-content-center">
    <div class="contactFormBG col-sm-10 col-lg-8 col-xl-6 py-4 px-4">
        <form action="<?=$this->router->generate('formations-modify-validate')?>" method="POST">
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input class="inputBG form-control" name="title" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="<?=$formationId->getTitle()?>" onkeyup="this.setAttribute('value', this.value);" required>
                        <label class="labelColor" for="floatingInput">Titre</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input class="inputBG form-control mb-2" name="price" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="<?=$formationId->getPrice()?>" onkeyup="this.setAttribute('value', this.value);">
                        <label class="labelColor" for="floatingInput">Prix</label>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md">
                    <div class="form-floating">
                        <input class="inputBG form-control" name="content1" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="<?=$formationId->getContent1()?>" onkeyup="this.setAttribute('value', this.value);" required>
                        <label class="labelColor" for="floatingInputGrid">Ligne 1</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input class="inputBG form-control" name="content2" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="<?=$formationId->getContent2()?>" onkeyup="this.setAttribute('value', this.value);" required>
                        <label class="labelColor" for="floatingInputGrid">Ligne 2</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input class="inputBG form-control mb-3" name="content3" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="<?=$formationId->getContent3()?>" onkeyup="this.setAttribute('value', this.value);" required>
                        <label class="labelColor" for="floatingInputGrid">Ligne 3</label>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md">
                    <div class="form-floating">
                        <input class="inputBG form-control" name="content4" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="<?=$formationId->getContent4()?>" onkeyup="this.setAttribute('value', this.value);" required>
                        <label class="labelColor" for="floatingInputGrid">Ligne 4</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input class="inputBG form-control" name="content5" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="<?=$formationId->getContent5()?>" onkeyup="this.setAttribute('value', this.value);" required>
                        <label class="labelColor" for="floatingInputGrid">Ligne 5</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input class="inputBG form-control" name="content6" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="<?=$formationId->getContent6()?>" onkeyup="this.setAttribute('value', this.value);">
                        <label class="labelColor" for="floatingInputGrid">Ligne 6</label>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-start">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" value="1" type="radio" name="sector" id="flexRadioDefault1" <?php if($formationId->getId_sector()===1) echo "checked" ?>>
                        <label class="greyP form-check-label" for="flexRadioDefault1">
                            Restauration commerciale
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="2" type="radio" name="sector" id="flexRadioDefault2" <?php if($formationId->getId_sector()===2) echo "checked" ?>>
                        <label class="greyP form-check-label" for="flexRadioDefault2">
                            Collectivités
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="3" type="radio" name="sector" id="flexRadioDefault2" <?php if($formationId->getId_sector()===3) echo "checked" ?>>
                        <label class="greyP form-check-label" for="flexRadioDefault2">
                            Métiers de bouche
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="4" type="radio" name="sector" id="flexRadioDefault2" <?php if($formationId->getId_sector()===4) echo "checked" ?>>
                        <label class="greyP form-check-label" for="flexRadioDefault2">
                            Fabrication de produits
                        </label>
                    </div>
                </div>
            </div>

            <input type="hidden" name="token" value="<?=$_SESSION['token']?>">

            <div class="d-flex justify-content-center mb-4">
                <button class="btnContact mt-3" type="submit" name="id" value="<?=$formationId->getId()?>">MODIFIER</button>
            </div>

        </form>
    </div>
</div>
</section>

</main>

<?php
$titre = "Modification";
$robot = "none";
$meta = "Page de modification de formation";
$content = ob_get_clean();
require_once "../App/Views/Layouts/templateView.php";