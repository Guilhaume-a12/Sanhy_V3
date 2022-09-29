<?php
if (isset($_SESSION['user'])) {
?>
    <section class="container pt-4">

        <div class="row d-flex justify-content-center">
            <div class="contactFormBG col-sm-10 col-lg-8 col-xl-6 py-4 px-4">
                <form action="<?=$this->router->generate('formations-add')?>" method="POST">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input class="inputBG form-control" name="title" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);" required>
                                <label class="labelColor" for="floatingInput">Titre</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input class="inputBG form-control mb-2" name="price" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);">
                                <label class="labelColor" for="floatingInput">Prix</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input class="inputBG form-control" name="content1" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);" required>
                                <label class="labelColor" for="floatingInputGrid">Ligne 1</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input class="inputBG form-control" name="content2" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);" required>
                                <label class="labelColor" for="floatingInputGrid">Ligne 2</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input class="inputBG form-control mb-3" name="content3" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);" required>
                                <label class="labelColor" for="floatingInputGrid">Ligne 3</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input class="inputBG form-control" name="content4" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);" required>
                                <label class="labelColor" for="floatingInputGrid">Ligne 4</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input class="inputBG form-control" name="content5" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);" required>
                                <label class="labelColor" for="floatingInputGrid">Ligne 5</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input class="inputBG form-control" name="content6" type="text" id="floatingInputGrid" placeholder="." autocomplete="off" value="" onkeyup="this.setAttribute('value', this.value);">
                                <label class="labelColor" for="floatingInputGrid">Ligne 6</label>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-start">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" value="1" type="radio" name="sector" id="flexRadioDefault1" <?php if($this->routeName==="formations-display-RC") echo "checked" ?>>
                                <label class="greyP form-check-label" for="flexRadioDefault1">
                                    Restauration commerciale
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="2" type="radio" name="sector" id="flexRadioDefault2" <?php if($this->routeName==="formations-display-C") echo "checked" ?>>
                                <label class="greyP form-check-label" for="flexRadioDefault2">
                                    Collectivités
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="3" type="radio" name="sector" id="flexRadioDefault2" <?php if($this->routeName==="formations-display-MB") echo "checked" ?>>
                                <label class="greyP form-check-label" for="flexRadioDefault2">
                                    Métiers de bouche
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="4" type="radio" name="sector" id="flexRadioDefault2" <?php if($this->routeName==="formations-display-FP") echo "checked" ?>>
                                <label class="greyP form-check-label" for="flexRadioDefault2">
                                    Fabrication de produits
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