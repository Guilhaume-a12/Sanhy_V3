<?php ob_start(); ?>

<main>
    <section class="headerTestezVous container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-8 py-5">
                    <p class="formationsLabel greyP"></p>
                </div>
            </div>
            <div class="row d-flex flex-row-reverse">
                <div class="col-sm-9 col-md-8 pb-5">
                    <h1 class="formationsTitle text-center greyP">Testez vos connaissances</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="underHeaderContact container-fluid">
        <p class="whiteP contactP fw-bold text-center">Venez tester vos connaissances à l'aide de quelques quiz rapides et ludiques !</p>
    </div>

    <section class="container py-5 mb-5">
        <div class="row">
            <div class="col">
                <h2 class="greyH2 text-center">Quiz : Cadre réglementaire de la formation HACCP en restauration commerciale</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <iframe src="https://view.genial.ly/605868cc904fc60d1b51799b" frameborder="0"></iframe>
            </div>
        </div>
    </section>

    <section class="container-fluid greenBG py-5 mb-5">
        <div class="row">
            <div class="col">
                <h2 class="whiteH2 text-center">Quiz : Les idées reçues en cuisine</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <iframe src="https://view.genial.ly/605885d6c03dc10d75ed71f3" frameborder="0"></iframe>
            </div>
        </div>
    </section>

    <section class="container mb-5">
        <div class="row">
            <div class="col">
                <h2 class="greyH2 text-center">Escape Game : Les micro-organismes et les TIAC</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <iframe src="https://view.genial.ly/60588e5ae760cb0d64f688cb" frameborder="0"></iframe>
            </div>
        </div>
    </section>
    
</main>

<?php
$titre = "Testez vos connaissances";
$robot = "all";
$meta = "Testez vos connaissances en hygiène/HACCP ! Nous utilisons au maximum ce type de jeux dans nos formations HACCP pour les rendre le plus ludique possible. Amusez-vous !";
$content = ob_get_clean();
require_once "../App/Views/Layouts/templateView.php";