<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\EmailHandler;

class KsiLoginController extends Controller
{

  private $userToken;
  private $updateForm;

  public function __construct()
  {

    $this->userToken = LoginHandler::checkLogin();
  }

  public function checkLogin()
  {
    $cpf = filter_input(INPUT_POST, 'cpf');
    $password = filter_input(INPUT_POST, 'password');
    $contratoPolitica = filter_input(INPUT_POST, 'contrato_politica');

    if ($cpf && $password && $contratoPolitica) {
      $token = LoginHandler::veryLogin($cpf, $password, $contratoPolitica, false);
      if ($token) {
        $_SESSION['token'] = $token;
        $this->redirect('/ksi/area-cliente');
      } else {
        $_SESSION['flash-i'] = 'Cpf ou senha invalidos';
        $this->redirect('/');
      }
    }
  }

  public function logout()
  {
     $disconnect = filter_input(INPUT_GET, 'disconnect');
     if (!empty($_SESSION['token'])) {
      $_SESSION['token'] = '';
     }
     
     if($disconnect == 'true'){
      $_SESSION['flash'] = "Sessão expirada!";
      $this->redirect('/ksi/adm/login-adm');
      exit;
     }else{
      $this->redirect('/');
      exit;
     }
    
  }

  public function add()
  {

  }

  public function findId()
  {

  }

  public function update($att)
  {
    $user = LoginHandler::checkLogin();


    $array = [];
    if ($att['id']) {
      $input = filter_input_array(INPUT_POST);

      $array['id'] = $user->id;
      $array['none'] = $user->nome;
      $array['email'] = $input['email'];
      $array['password'] = $input['password'];
      $array['telefone_comercial'] = $input['tel_comercial'];
      $array['telefone_residencial'] = $input['tel_residencial'];
      $array['celular'] = $input['celular'];
      $array['cep'] = $input['cep'];
      $array['end'] = $input['end'];
      $array['num'] = $input['num'];
      $array['bairro'] = $input['bairro'];
      $array['cidade'] = $input['cidade'];
      $array['uf'] = $input['uf'];
      $array['cep_comercial'] = $input['cep_comercial'];
      $array['end_comercial'] = $input['end_comercial'];
      $array['num_comercial'] = $input['num_comercial'];
      $array['bairro_comercial'] = $input['bairro_comercial'];
      $array['cidade_comercial'] = $input['cidade_comercial'];
      $array['uf_comercial'] = $input['uf_comercial'];
      $array['contrato_politica'] = $input['contrato'];
      $array['token'] = $_SESSION['token'];


      if (isset($_FILES['photo']) && !empty($_FILES['photo']['tmp_name'])) {
        $newPhoto = $_FILES['photo'];
        if (in_array($newPhoto['type'], ['image/png', 'image/jpg', 'image/jpeg'])) {
          $photoWidth = 200;
          $photoHeight = 200;

          list($widthOrig, $heightOrig) = getimagesize($newPhoto['tmp_name']);
          $ratio = $widthOrig / $heightOrig;

          $newWidth = $photoWidth;
          $newHeight = $newWidth / $ratio;

          if ($newHeight < $photoHeight) {
            $newHeight = $photoHeight;
            $newWidth = $newHeight * $ratio;
          }

          $x = $photoWidth - $newWidth;
          $y = $photoHeight - $newHeight;

          $x = $x < 0 ? $x / 2 : $x;
          $y = $y < 0 ? $y / 2 : $y;

          $finalImage = imagecreatetruecolor($photoWidth, $photoHeight);

          switch ($newPhoto['type']) {
            case 'image/jpeg':
            case 'image/jpg';
              $image = imagecreatefromjpeg($newPhoto['tmp_name']);
              break;

            case 'image/png';
              $image = imagecreatefrompng($newPhoto['tmp_name']);
              break;
          }
          imagecopyresampled(
            $finalImage,
            $image,
            $x,
            $y,
            0,
            0,
            $newWidth,
            $newHeight,
            $widthOrig,
            $heightOrig
          );
          $photoName = md5(time() . rand(0, 9999)) . '.jpg';

          $dir = "./assets/media/user/" . $user->id . "/";

          if (is_dir($dir)) {
            unlink($dir . $user->photo);
          }
          imagejpeg($finalImage, './assets/media/user/' . $user->id . '/' . $photoName, 100);
          $array['photo'] = $photoName;
        }
      } else {
        $array['photo'] = $user->photo;
      }

      if (empty($array['contrato_politica'])) {
        $_SESSION['flash'] = "Contrato não aceito";
        $this->redirect('/ksi/area-cliente');
        exit;
      }

      if ($array['password'] != $input['check_password']) {
        $_SESSION['flash'] = "Senhas não conferem!";
        $this->redirect('/ksi/area-cliente');
        exit;
      }


      if (LoginHandler::update_form($array)) {
        $_SESSION['flash'] = 'Alterado com sucesso';
        $this->redirect('/ksi/area-cliente');
      }
    }
  }

  public function envEmail()
  {
    $flash = "";
    if (!empty($_SESSION['flash'])) {
      $flash = $_SESSION['flash'];
      $_SESSION['flash'] = "";
    }
    $page = "recEmail";
    $this->render('ksi/envEmail', [
      'page' => $page,
      'flash' => $flash
    ]);
  }

  public function envEmailActive()
  {
    $cpf = filter_input(INPUT_POST, 'cpf');
    if ($user = LoginHandler::checkCpf($cpf)) {
      $token = md5(time() . rand(0, 9999));
      $user['token'] = $token;
      $user['created_at'] = date('Y/m/d H:m/s');

      LoginHandler::update_form($user);
      if (EmailHandler::envEmail($user, $token)) {
        $_SESSION['flash'] = "Foi enviado um link no E-mail!";
        $this->redirect('/ksi/env-email');
      }
    } else {
      $_SESSION['flash'] = "CPF não encontrado!";
      $this->redirect('/ksi/env-email');
    }
  }

  public function alterPassword($token)
  {
   
    $flash = "";
    if (!empty($_SESSION['flash'])) {
      $flash = $_SESSION['flash'];
      $_SESSION['flash'] = "";
    }

    $page = "alterPassword";
    
    if (!empty($token['token'])) {

     $_SESSION['token'] = $token['token'];
     $token = (!empty($this->userToken->token) ? $this->userToken->token:'');
    }
    $this->render('ksi/alter-password', [
      'page' => $page,
      'newToken' => $token,
      'flash' => $flash
    ]);
  }

  public function alterPasswordAction($token)
  {
    
    $newPassword = filter_input(INPUT_POST, 'password');
    $checkPassword = filter_input(INPUT_POST, 'check-password');

    if ($newPassword && $checkPassword) {
      if ($newPassword == $checkPassword) {
        $user = LoginHandler::checkCpf($this->userToken->cpf);

        $user['password'] = $newPassword;
        $user['updated_at'] = date('Y-m-d H:i:s');
        if ( LoginHandler::update_form($user)) {
          
          $_SESSION['flash-i'] = "Faça o login";
          $this->redirect('/');
        }

      } else {
        $_SESSION['flash'] = "Senhas não conferem!";
        $this->redirect('/ksi/alter-password/' . $token);
      }
    } else {
      $_SESSION['flash'] = "Espaço em branco!";
      $this->redirect('/ksi/alter-password/' . $token);
    }

  }

  public function deletar()
  {

  }
}