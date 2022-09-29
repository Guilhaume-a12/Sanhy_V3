<?php

namespace App\Controllers\User;

use App\Controllers\CoreController as Core;
use App\Models\User\UserManager;

class UserController extends Core {

    private $userManager;

    public function __construct()
    {
        PARENT::__construct();
        $this->userManager = new UserManager;
    }

    public function displayLogin() {
        require "../App/Views/User/connexionView.php";
    }

    public function login(){

            if(empty($_POST['mail']) || empty($_POST['password'])){
                $this->alert("danger","Renseignez tout les champs");
                header("location:".$this->router->generate('user-display-login'));
                exit;
            }
            $user = $this->userManager->findUser($_POST['mail']);
            if(!empty($user)){
                if(password_verify($_POST['password'],$user->getPassword())){
                    $this->sessionUser($user->getName(),$user->getRole());
                    $this->alert("success","Bonjour ".$_SESSION['user']);
                }else{
                    $this->alert("danger","Les informations entrées sont incorrectes");
                    header("location:".$this->router->generate('user-display-login'));
                    exit;
                }
            }else{
                $this->alert("danger","Les informations entrées sont incorrectes");
                header("location:".$this->router->generate('user-display-login'));
                exit;
            }

        header("location:".$this->router->generate('home')); 
    }

    public function sessionUser($user,$role){
        $_SESSION['user'] = $user;
        $_SESSION['role'] = $role;
    }

    public function logout(){
        session_destroy();
        header("location: ".$this->router->generate('home'));
    }

}