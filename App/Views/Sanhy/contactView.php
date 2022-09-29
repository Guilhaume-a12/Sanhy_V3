<?php ob_start(); ?>

<main>
    <section class="headerContactBG container-fluid">
        <div class="container">
            <div class="row">
                <div class="col py-5">
                    <h1 class="formationsTitle text-center greyP">Formulaire de contact</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="underHeaderContact container-fluid">
        <p class="whiteP contactP fw-bold text-center">Besoin de plus d'informations ? Vous souhaitez vous inscrire à une formation ? Vous pouvez nous contacter via ce formulaire de contact !</p>
    </div>

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

    <section class="container pt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 col-xl-4 p-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-envelope-fill blueGreenP iconContact"></i>
                    <p class="greyP ps-5 fw-bold">contact@sanhy.fr</p>
                </div>
                <div class="d-flex align-items-center py-3">
                    <i class="bi bi-telephone-fill blueGreenP iconContact"></i>
                    <p class="greyP ps-5 fw-bold">07.60.43.60.62</p>
                </div>
            </div>
            <div class="contactFormBG col-sm-6 col-xl-6 py-4 px-4">
                <p class="greyP">Veuillez remplir tout les champs suivi d'un *</p>
                <form action="<?=$this->router->generate('contact-send')?>" method="POST">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input class="inputBG form-control" name="name" type="text" id="floatingInputGrid" placeholder="Votre nom" autocomplete="off" <?php if (isset($_SESSION['form'])) { echo "value='".$_SESSION['form']['name']."'";} else { echo "value=''"; }?> onkeyup="this.setAttribute('value', this.value);" >
                                <label class="labelColor" for="floatingInput">Nom*</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input class="inputBG form-control mb-2" name="company" type="text" id="floatingInputGrid" placeholder="Nom de votre société" autocomplete="off" <?php if (isset($_SESSION['form'])) { echo "value='".$_SESSION['form']['company']."'";} else { echo "value=''"; }?> onkeyup="this.setAttribute('value', this.value);">
                                <label class="labelColor" for="floatingInput">Société</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input class="inputBG form-control" name="mail" type="email" id="floatingInputGrid" placeholder="Adresse email" autocomplete="off" <?php if (isset($_SESSION['form'])) { echo "value='".$_SESSION['form']['mail']."'";} else { echo "value=''"; }?> onkeyup="this.setAttribute('value', this.value);" >
                                <label class="labelColor" for="floatingInputGrid">Email*</label>
                            </div>
                        </div>


                        <div class="col-md">
                            <div class="form-floating">
                                <input class="inputBG form-control mb-2" name="phone" type="number" id="floatingInputGrid" placeholder="Téléphone" autocomplete="off" <?php if (isset($_SESSION['form'])) { echo "value='".$_SESSION['form']['phone']."'";} else { echo "value=''"; }?> onkeyup="this.setAttribute('value', this.value);" >
                                <label class="labelColor" for="floatingInputGrid">Téléphone*</label>
                            </div>
                        </div>
                    </div>
                    <?php
                        if (!empty($_POST['title']) && !empty($_POST['sector'])) {
                    ?>
                        <div class="row g-2">
                            <div class="form-floating">
                                <input class="inputBG form-control mb-2" name="object" type="text" id="floatingInput" placeholder="Objet" autocomplete="off" 
                                value="Inscription formation <?=$_POST['title']?> - Secteur : <?=$sector?>" 
                                onkeyup="this.setAttribute('value', this.value);" >
                                <label class="labelColor" for="floatingInput">Objet*</label>
                            </div>
                        </div>
                    <?php
                        } else {
                    ?>
                        <div class="row g-2">
                            <div class="form-floating">
                                <input class="inputBG form-control mb-2" name="object" type="text" id="floatingInput" placeholder="Objet" autocomplete="off" <?php if (isset($_SESSION['form'])) { echo "value='".$_SESSION['form']['object']."'";} else { echo "value=''"; }?> onkeyup="this.setAttribute('value', this.value);" >
                                <label class="labelColor" for="floatingInput">Objet*</label>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    <div class="row g-2">
                        <div class="form-floating">
                            <textarea class="inputBG form-control mb-2" name="message" placeholder="Laissez votre message ici" id="floatingTextarea2" style="height: 150px" autocomplete="off" <?php if (isset($_SESSION['form'])) { echo "value='".$_SESSION['form']['message']."'";} else { echo "value=''"; }?>  onkeyup="this.setAttribute('value', this.value);"></textarea>
                            <label class="labelColor" for="floatingTextarea2">Message*</label>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="check" type="checkbox" value="checked" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">
                            <p class="greyP">* Les informations recueillies sur ce formulaire apparaîtront dans le mail envoyé à SANHYFormation et seront utilisées uniquement pour vous contacter et donner réponse; ces données ne seront pas enregistrées (sauf en cas d'établissement de devis si cela fait suite).</p>
                        </label>
                    </div>

                    <div class="d-flex justify-content-center mb-4 d1">
                        <button class="btnContact mt-3 togg1" type="submit">ENVOYER</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
</main>

<?php
$titre = "Contact";
$robot = "all";
$meta = "Pour en savoir plus sur nos formations HACCP, pour s'inscrire, ou tout simplement poser une question, n'hésitez pas à nous contacter.";
$content = ob_get_clean();
require_once "../App/Views/Layouts/templateView.php";
