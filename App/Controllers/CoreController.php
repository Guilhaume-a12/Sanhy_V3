<?php

namespace App\Controllers;

use App\Controllers\ErrorController;
use Exception;

abstract class CoreController
{
    public $router;
    public $routeName;

    public function __construct()
    {
        global $router;
        $this->router = $router;

        global $match;

        $this->routeName = $match['name'];

        $acl = [
            // HOME
            "home" => ["admin","user","login"],

            // USER
            "user-display-login" => ["connected","login"],
            "user-login" => ['connected',"login"],
            "user-logout" => ["admin","user"],

            // PLANNING
            "planning-add" => ["admin"],
            "planning-delete" => ["admin"],

            // FORMATION
            "formations-add" => ["admin"],
            "formations-delete" => ["admin"],
            "formations-modify" => ["admin"],
            "formations-modify-validate" => ["admin"],
        ];

        if (array_key_exists($this->routeName, $acl)) {
            $autorizedRoles = $acl[$this->routeName];

            $this->checkAuthorization($autorizedRoles);
        }

        $csrfTokenToCreate = [
            "planning",
            "formations-display-RC",
            "formations-display-C",
            "formations-display-MB",
            "formations-display-FP",
            "formations-modify",
        ];
        if (in_array($this->routeName, $csrfTokenToCreate)) {

            $_SESSION['token'] = bin2hex(random_bytes(32));
        }

        $csrfTokenToCheck = [
            "planning-add",
            "planning-delete",
            "formations-add",
            "formations-delete",
            "formations-modify-validate",
        ];

        if (in_array($this->routeName, $csrfTokenToCheck)) {
            if (isset($_GET['token'])) {
                $token = $_GET['token'];
            } else if (isset($_POST['token'])) {
                $token = $_POST['token'];
            } else {
                $token = null;
            }
            $sessionToken = isset($_SESSION['token']) ? $_SESSION['token'] : null;

            if ($token != $sessionToken || empty($token)) {
                $errorController = new ErrorController();
                $errorController->error403();
                exit;
            } else {
                unset($_SESSION['token']);
            }
        }
    }


    protected function checkAuthorization(array $roles = [])
    {

        if (isset($_SESSION['user'])) {
            if (in_array('connected', $roles)) {
                $this->alert("danger", "You're already connected");
                header("location:" . $this->router->generate('home'));
                exit;
            }

            $userRole = $_SESSION['role'];
            if (in_array($userRole, $roles)) {

                return true;
            } else {
                $errorController = new ErrorController();

                $errorController->error403();
                exit;
            }
        } else if (in_array("login",$roles) && !isset($_SESSION['user'])) {
            return true;
        } else {
            $this->alert("danger","You must log in");
            header('Location: ' . $this->router->generate('user-display-login'));
            exit;
        }
    }

    protected function addImage($title, $file, $dir)
    {
        try {
            if (!isset($file['name']) || empty($file['name']))
                throw new Exception("You must select an image");


            $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

            $random = rand(0, 99999);

            $file['name'] = str_replace(" ", "_", $title . "." . $extension);

            $target_file = $dir . $random . "_" . $file['name'];


            if (!getimagesize($file["tmp_name"]))
                throw new Exception("The selected file is not an image");
            if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
                throw new Exception("The file extension is not recognized");
            if (file_exists($target_file))
                throw new Exception("The selected file already exists");
            if ($file['size'] > 1000000)
                throw new Exception("Maximum size exceeded");
            if (!move_uploaded_file($file['tmp_name'], $target_file))
                throw new Exception("Adding the image did not work");
            else return $random . "_" . $file['name'];
        } catch (Exception $e) {
            $this->alert("danger", $e->getMessage());
            header("location:" . $this->router->generate('books-add'));
            exit;
        }
    }

    protected function alert($type, $message)
    {
        $_SESSION['alert'] = [
            "type" => $type,
            "msg" => $message
        ];
        return $_SESSION['alert'];
    }
}
