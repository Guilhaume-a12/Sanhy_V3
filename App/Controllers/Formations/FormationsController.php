<?php

namespace App\Controllers\Formations;

use App\Controllers\CoreController as Core;
use App\Models\Formations\FormationsManager;

class FormationsController extends Core
{

    private $formationsManager;

    public function __construct()
    {
        PARENT::__construct();
        $this->formationsManager = new FormationsManager;
        $this->formationsManager->loadingFormations();
    }

    public function displayRC()
    {
        $formationsRC = $this->formationsManager->getFormationsRC();
        require "../App/Views/Formations/restaurationCommercialeView.php";
    }

    public function displayC()
    {
        $formationsC = $this->formationsManager->getFormationsC();
        require "../App/Views/Formations/collectivitesView.php";
    }

    public function displayMB()
    {
        $formationsMB = $this->formationsManager->getFormationsMB();
        require "../App/Views/Formations/metiersDeBoucheView.php";
    }

    public function displayFP()
    {
        $formationsFP = $this->formationsManager->getFormationsFP();
        require "../App/Views/Formations/fabricationDeProduitsView.php";
    }

    public function addFormation()
    {
        if ($_POST['content6'] === '') {
            $_POST['content6'] = null;
        }
        $this->formationsManager->addFormationInDB($_POST['title'], $_POST['price'], $_POST['content1'], $_POST['content2'], $_POST['content3'], $_POST['content4'], $_POST['content5'], $_POST['content6'], $_POST['sector']);
        switch ($_POST['sector']) {
            case 1:
                header("location:" . $this->router->generate('formations-display-RC'));
                break;
            case 2:
                header("location:" . $this->router->generate('formations-display-C'));
                break;
            case 3:
                header("location:" . $this->router->generate('formations-display-MB'));
                break;
            case 4:
                header("location:" . $this->router->generate('formations-display-FP'));
                break;
        }
    }

    public function deleteFormation($id, $action)
    {
        $this->formationsManager->deleteFormationDB($id);
        header("location:" . $this->router->generate($action));
    }

    public function toModifyFormation($id)
    {
        $formationId = $this->formationsManager->getFormationById($id);
        require "../App/Views/Formations/modifierFormationView.php";
    }

    public function modifyFormation()
    {
            if ($_POST['content6'] === '') {
                $_POST['content6'] = null;
            }
            switch ($_POST['sector']) {
                case 1:
                    $path = "formations-display-RC";
                    break;
                case 2:
                    $path = "formations-display-C";
                    break;
                case 3:
                    $path = "formations-display-MB";
                    break;
                case 4:
                    $path = "formations-display-FP";
                    break;
            }
            $this->formationsManager->modifyFormationInDB($_POST['title'], $_POST['price'], $_POST['content1'], $_POST['content2'], $_POST['content3'], $_POST['content4'], $_POST['content5'], $_POST['content6'], $_POST['sector'], $_POST['id']);
            header("location:" . $this->router->generate($path));
    }
}
