<?php ob_start(); ?>

<div class="container mb-5 mt-4">
    <div class="row">
    <h1 class="text-center py-5">Erreur 404, La page que vous cherchez n'existe pas</h1>
    </div>
    <div class="row d-flex flex-column align-items-center">
        <p class="text-center greyP py-3">Vous vous êtes perdu ?</p>
        <a class="btnHeader btn" href="<?=$this->router->generate('home')?>">L'accueil c'est par ici !</a>
    </div>
</div>

<?php
$titre = "Error 404, page not found";
$robot = "all";
$meta = "Page d'erreur 404";
$content = ob_get_clean();
require_once "../App/Views/Layouts/templateView.php";
