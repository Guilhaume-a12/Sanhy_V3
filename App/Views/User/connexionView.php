<?php ob_start(); ?>

<main class="container pt-4">

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

    <div class="row d-flex justify-content-center">
        <div class="contactFormBG col-sm-10 col-lg-8 col-xl-6 py-4 px-4">
            <form action="<?=$this->router->generate('user-login')?>" method="POST" class="">

                <div class="col-md">
                    <div class="form-floating">
                        <input class="inputBG form-control mb-2" type="email" id="floatingInputGrid" name="mail" placeholder="Téléphone" autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);" required>
                        <label class="labelColor" for="floatingInputGrid">Email</label>
                    </div>
                </div>

                <div class="form-floating">
                    <input class="inputBG form-control mb-2" type="password" id="floatingInput" name="password" placeholder="Objet" autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);" required>
                    <label class="labelColor" for="floatingInput">Mot de passe</label>
                </div>


                <div class="d-flex justify-content-center mb-4">
                    <button class="btnContact mt-3" type="submit">CONNEXION</button>
                </div>

            </form>
        </div>
    </div>
</main>

<?php
$titre = "Connexion";
$robot = "none";
$meta = "Page de connexion.";
$content = ob_get_clean();
require_once "../App/Views/Layouts/templateView.php";
