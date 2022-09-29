<?php

namespace App\Controllers;

use App\Controllers\CoreController as Core;

class MainController extends Core
{

    public function displayHome()
    {
        require "../App/Views/homeView.php";
    }

    public function displayTestezVous()
    {
        require "../App/Views/Sanhy/testezVousView.php";
    }

    public function displayMentionsLegales()
    {
        require "../App/Views/Sanhy/mentionsLegalesView.php";
    }

    public function displayAPropos()
    {
        require "../App/Views/Sanhy/aProposView.php";
    }

    public function displayContact()
    {
        if (!empty($_POST['sector']) && !empty($_POST['title'])) {
            switch($_POST['sector']) {
                case 1:
                    $sector = "Restauration Commerciale";
                    break;
                case 2:
                    $sector = "Collectivités";
                    break;
                case 3:
                    $sector = "Métiers de bouche";
                    break;
                case 4:
                    $sector = "Fabrication de produits";
                    break;
            }
        }
        require "../App/Views/Sanhy/contactView.php";
        unset($_SESSION['form']);
    }

    public function downloadCgv() // TODO changer le nom de cette méthode
    {

        $file = "Assets/SANHY_CGV.pdf";

        if (isset($_POST["downloadCgv"])) {

            // header("Access-Control-Allow-Origin: *");
            // header("Content-Type: application/octet-stream");
            // header("Content-Transfer-Encoding: Binary");
            // header("Content-disposition: attachment; filename=$file");

            // echo readfile($file);

            header('Content-type: application/pdf');

            header('Content-Disposition: inline; filename="' . $file . '"');

            header('Content-Transfer-Encoding: binary');

            header('Accept-Ranges: bytes');

            readfile($file);

            $this->displayMentionsLegales();
        } else {
            $this->alert("danger", "Pour télécharger les CGV, veuillez cliquer sur le bouton correspondant dans la partie des mentions légales");
            $this->displayMentionsLegales();
        }
    }

}
