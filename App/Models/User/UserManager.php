<?php

namespace App\Models\User;

use App\Models\ModelClass as Model;
use App\Models\User\UserClass as User;
use PDO;

class UserManager extends Model {

    public function findUser($mail) {

        $sql = "SELECT * FROM users WHERE users_mail = :mail";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([
            ":mail"=>$mail
        ]);
        $data = $req->fetch(PDO::FETCH_OBJ);
        if (!empty($data)) {
            $user = new User($data->id_users, $data->users_name, $data->users_mail, $data->users_password, $data->role);
            return $user;
        } else {
            return null;
        }
    }

}