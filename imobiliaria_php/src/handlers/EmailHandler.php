<?php
namespace src\handlers;

require 'PHPmailer/src/PHPMailer.php';
require 'PHPmailer/src/SMTP.php';
require 'PHPmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use \core\Controller;


class EmailHandler extends Controller
{
  public static function envEmail($user, $token)
  {
    $userName = $user['nome'];
    $userEmail = $user['email'];
    $mail = new PHPMailer(true);
    try {
      //email
      $mail = new PHPMailer();
      $mail->isSMTP();
      $mail->CharSet = 'UTF-8';
      $mail->Host = 'sandbox.smtp.mailtrap.io';
      $mail->SMTPAuth = true;
      $mail->Port = 2525;
      $mail->Username = '4f8886d800796d';
      $mail->Password = '960beed10dbfff';
      $mail->setFrom('profissao33@hmail.com');
      $mail->addAddress($userEmail);
      $mail->isHTML(true);
      $mail->Subject = 'Recuperação de Senha de acesso: KSI - Kurole Sistema Imobiliario ';

      $mail->Body =
        "
        <div style='width:100%; display: flex; justify-content: center;'>
           <h1>Imobiliaria Estilo</h1>
        </div>
        <div style='width:100%; display: flex; justify-content: center;'>
           <h2> Olá, $userName!</h2>
        </div>
        <div style='width:100%; display: flex; justify-content: center;'>
           <p> Segue o código de acesso.</p>
        </div>
        <div style='width:100%; display: flex; justify-content: center;'>
          <p>Code: $token </p> <br/> <br>
        </div>
        <div style='width: 100%; padding: 20px 0; display: flex; justify-content: center;'>
          <a href='http://localhost/imobiliaria_PHP/public/ksi/alter-password/$token'>
             <button style='background-color: rgb(41, 103, 236); color: #fff;
               padding: 10px 10px; border-radius: 5px;
               cursor: pointer;
               outline: none; margin: 0 auto;
               border: 0;'
               type='button'>
               Acessar
            </button>
          </a>
        </div>
        <footer style='padding: 20px 5px'>
        <p>Email automático: Não Responda está email</p>
        </footer>
      ";
      $mail->AltBody = 'link:$token';

      if ($mail->send()) {
           return true;
      } else {
        echo 'Email não enviado';
      }

    } catch (Exception $e) {
      echo "Error ao enviar mensagem:" . $mail->ErrorInfo;
    }
  }
}