<?php

namespace App\Models\Planning;

use App\Models\ModelClass as Model;
use App\Models\Planning\PlanningClass as Planning;
use PDO;

class PlanningManager extends Model {

    private $plannings;

    public function addPlanning($planning){
        $this->plannings[] = $planning;
    }

    public function getPlannings(){
        return $this->plannings;
    }

    public function loadingPlannings(){
        $sql ="SELECT * FROM planning";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $plannings = $req->fetchALL(PDO::FETCH_OBJ);
        foreach($plannings as $data){
            $add = new Planning($data->id_planning, $data->planning_d1, $data->planning_d2, $data->planning_d3, $data->planning_month, $data->planning_year, $data->planning_schedule, $data->id_place);
            $this->addPlanning($add);
        }
    }

    public function addPlanningInDB($d1,$d2,$d3,$month,$year,$schedule,$place) {
        $sql = "INSERT INTO planning (planning_d1,planning_d2,planning_d3,planning_month,planning_year,planning_schedule,id_place) VALUES (:d1,:d2,:d3,:month,:year,:schedule,:place)";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([
            ":d1"=>$d1,
            ":d2"=>$d2,
            ":d3"=>$d3,
            ":month"=>$month,
            ":year"=>$year,
            ":schedule"=>$schedule,
            ":place"=>$place
        ]);
    }

    public function getPlanningById($id_planning) {

        $sql = "SELECT * FROM planning WHERE id_planning = :planning";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([
            ":planning"=>$id_planning
        ]);
        $data = $req->fetch(PDO::FETCH_OBJ);
        if (!empty($data)) {
            $planning = new Planning($data->id_planning, $data->planning_d1, $data->planning_d2, $data->planning_d3, $data->planning_month, $data->planning_year, $data->planning_schedule, $data->id_place);
            return $planning;
        } else {
            return null;
        }
    }

    public function deletePlanningDB($id) {

        $sql = "DELETE FROM planning WHERE id_planning = :planning";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([
            ":planning"=>$id
        ]);
    }
}