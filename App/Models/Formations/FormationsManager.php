<?php

namespace App\Models\Formations;

use App\Models\ModelClass as Model;
use App\Models\Formations\FormationClass as Formation;
use PDO;

class FormationsManager extends Model {

    private $formationsRC;
    private $formationsC;
    private $formationsMB;
    private $formationsFP;

    public function addFormationRC($formation){
        $this->formationsRC[] = $formation;
    }

    public function addFormationC($formation){
        $this->formationsC[] = $formation;
    }

    public function addFormationMB($formation){
        $this->formationsMB[] = $formation;
    }

    public function addFormationFP($formation){
        $this->formationsFP[] = $formation;
    }

    public function getFormationsRC(){
        return $this->formationsRC;
    }

    public function getFormationsC(){
        return $this->formationsC;
    }

    public function getFormationsMB(){
        return $this->formationsMB;
    }

    public function getFormationsFP(){
        return $this->formationsFP;
    }

    public function loadingFormations(){
        $sql ="SELECT * FROM formation";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $formations = $req->fetchALL(PDO::FETCH_OBJ);
        foreach($formations as $data){
            if ($data->id_sector === 1) {
                $add = new Formation($data->id_formation, $data->title, $data->price, $data->content1, $data->content2, $data->content3, $data->content4, $data->content5, $data->content6, $data->id_sector);
                $this->addFormationRC($add);
            } else if ($data->id_sector === 2) {
                $add = new Formation($data->id_formation, $data->title, $data->price, $data->content1, $data->content2, $data->content3, $data->content4, $data->content5, $data->content6, $data->id_sector);
                $this->addFormationC($add);
            } else if ($data->id_sector === 3) {
                $add = new Formation($data->id_formation, $data->title, $data->price, $data->content1, $data->content2, $data->content3, $data->content4, $data->content5, $data->content6, $data->id_sector);
                $this->addFormationMB($add);
            } else {
                $add = new Formation($data->id_formation, $data->title, $data->price, $data->content1, $data->content2, $data->content3, $data->content4, $data->content5, $data->content6, $data->id_sector);
                $this->addFormationFP($add);
            }
        }
    }

    public function addFormationInDB($title,$price,$content1,$content2,$content3,$content4,$content5,$content6,$sector) {
        $sql = "INSERT INTO formation (title,price,content1,content2,content3,content4,content5,content6,id_sector) VALUES (:title,:price,:content1,:content2,:content3,:content4,:content5,:content6,:sector)";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([
            ":title"=>$title,
            ":price"=>$price,
            ":content1"=>$content1,
            ":content2"=>$content2,
            ":content3"=>$content3,
            ":content4"=>$content4,
            ":content5"=>$content5,
            ":content6"=>$content6,
            ":sector"=>$sector
        ]);
    }

    public function getFormationById($id_formation) {
        $sql = "SELECT * FROM formation WHERE id_formation = :id_formation";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([
            ":id_formation"=>$id_formation
        ]);
        $data = $req->fetch(PDO::FETCH_OBJ);
        if (!empty($data)) {
            $formation = new Formation($data->id_formation, $data->title, $data->price, $data->content1, $data->content2, $data->content3, $data->content4, $data->content5, $data->content6, $data->id_sector);
            return $formation;
        } else {
            return null;
        }
    }

    public function deleteFormationDB($id) {

        $sql = "DELETE FROM formation WHERE id_formation = :id";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([
            ":id"=>$id
        ]);
    }

    public function modifyFormationInDB($title,$price,$content1,$content2,$content3,$content4,$content5,$content6,$sector,$id) {
        $sql = "UPDATE formation SET title=:title,price=:price,content1=:content1,content2=:content2,content3=:content3,content4=:content4,content5=:content5,content6=:content6,id_sector=:sector WHERE id_formation=:id";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([
            ":title"=>$title,
            ":price"=>$price,
            ":content1"=>$content1,
            ":content2"=>$content2,
            ":content3"=>$content3,
            ":content4"=>$content4,
            ":content5"=>$content5,
            ":content6"=>$content6,
            ":sector"=>$sector,
            ":id"=>$id
        ]);
    }

}