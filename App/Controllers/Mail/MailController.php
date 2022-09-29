<?php

namespace App\Controllers\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Controllers\CoreController as Core;

class MailController extends Core
{

    private $mail;
    private $config;

    public function __construct()
    {
        PARENT::__construct();
        $this->mail = new PHPMailer(true);
        $this->config = parse_ini_file(__DIR__."../../../config.ini");
    }

    public function sendEmail()
    {

        if (empty($_POST['name']) || empty($_POST['mail']) || empty($_POST['phone']) || empty($_POST['object']) || empty($_POST['message']) || empty($_POST['check'])) {
            $this->alert("danger","Veuillez renseigner tout les champs suivis d'un *");
            $this->formSession();
            header("location:".$this->router->generate('contact'));
            exit;
        } else {

            if ($_POST['company'] == '') {
                $_POST['company'] = 'Non renseigné';
            }

            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['mail']);
            $company = htmlspecialchars($_POST['company']);
            $phone = htmlspecialchars($_POST['phone']);
            $object = htmlspecialchars($_POST['object']);
            $message = htmlspecialchars($_POST['message']);

            $this->checkTime();

            try {

                //Server settings
                $this->mail->CharSet = 'UTF-8';
                // $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $this->mail->isSMTP();                                            //Send using SMTP
                $this->mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
                $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $this->mail->Username   = $this->config['ADRESS_MAIL'];                     //SMTP username
                $this->mail->Password   = $this->config['PASSWORD_MAIL'];                   //SMTP password
                $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                $this->mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $this->mail->setFrom($this->config['ADRESS_MAIL'], $name . ': ' . $email);
                $this->mail->addAddress($this->config['ADRESS_MAIL'], 'TestDev');     //Add a recipient
                //$this->mail->addAddress('ellen@example.com');               //Name is optional
                $this->mail->addReplyTo($email);
                //$this->mail->addCC('cc@example.com');
                //$this->mail->addBCC('testdev.gui@hotmail.com', 'TestDev');

                //Attachments
                //$this->mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                //$this->mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $this->mail->isHTML(true);                                  //Set email format to HTML
                $this->mail->Subject = '[Depuis sanhy.fr] ' . $object;
                $this->mail->Body    = "<p><b>Expéditeur: </b>" . $email . "</p>" . '<p><b>Tel: </b>' . $phone . '</p><p><b>Société: </b>' . $company . '</p><p><b>Message: </b></p><p>' . $message . '</p>';
                //$this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


                $this->mail->send();
                $this->alert("success", "Formulaire envoyé avec succès");
                $this->timeSession();
            } catch (\Exception $e) {
                $this->formSession();
                $this->alert("danger", "Une erreur est survenue lors de l'envoi du formulaire");
                header("location:".$this->router->generate('contact'));
                exit;
            }

            header("location:".$this->router->generate('contact'));
            exit;
        }
    }

    private function formSession() 
    {
        $_SESSION['form'] = [
            "name" => htmlspecialchars($_POST['name']),
            "mail" => htmlspecialchars($_POST['mail']),
            "company" => htmlspecialchars($_POST['company']),
            "phone" => htmlspecialchars($_POST['phone']),
            "object" => htmlspecialchars($_POST['object']),
            "message" => htmlspecialchars($_POST['message'])
        ];
    }

    private function timeSession() {
        $_SESSION['time'] = [
            "start" => time(),
            "end" => time()+300
        ];
    }

    private function checkTime() {
        if (isset($_SESSION['time'])) {
            if (time() < $_SESSION['time']['end']) {
                $this->formSession();
                $this->alert("danger","Vous devez attendre ".ceil(($_SESSION["time"]["end"]-time())/60)." min pour pouvoir envoyer un nouveau formulaire de contact");
                header("location:".$this->router->generate('contact'));
                exit;
            } else {
                unset($_SESSION["time"]);
            }
        } else {
            return true;
        }
    }
}
