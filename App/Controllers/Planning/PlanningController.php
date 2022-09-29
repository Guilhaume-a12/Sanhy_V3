<?php

namespace App\Controllers\Planning;

use App\Controllers\CoreController as Core;
use App\Models\Planning\PlanningManager;

class PlanningController extends Core
{

    private $planningManager;

    public function __construct()
    {
        PARENT::__construct();
        $this->planningManager = new PlanningManager();
        $this->planningManager->loadingPlannings();
    }

    public function displayPlanning()
    {
        $plannings = $this->planningManager->getPlannings();
        require "../App/Views/Sanhy/planningView.php";
    }

    public function addPlanning()
    {
        if ($_POST['d3'] == '') {
            $_POST['d3'] = null;
        }
        $this->planningManager->addPlanningInDB($_POST['d1'], $_POST['d2'], $_POST['d3'], $_POST['month'], $_POST['year'], $_POST['schedule'], $_POST['place']);
        header("location:" . URL . "planning");
    }

    public function deletePlanning($id)
    {
        $this->planningManager->deletePlanningDB($id);
        header("location:" . $this->router->generate("planning"));
    }
}
