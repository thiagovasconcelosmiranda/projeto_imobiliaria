<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class KsiLoginAdmController extends Controller
{
  public function index()
  {
    $flash = "";
    if (!empty($_SESSION['flash'])) {
      $flash = $_SESSION['flash'];
      $_SESSION['flash'] = "";
    }

    $page = "teste";
    $this->render('ksi/login-adm', [
      'page' => $page,
      'flash' => $flash
    ]);
  }

  public function loginAdmAccess()
  {
    $cpf = filter_input(INPUT_POST, 'cpf');
    $password = filter_input(INPUT_POST, 'password');

    if ($cpf && $password) {
      if ($token = LoginHandler::veryLogin($cpf, $password, "Concordo com os termos da política", true, 'online')) {
        $_SESSION['token'] = $token;
        $this->redirect('/ksi/adm/area-adm');
        exit;
      } else {
        $_SESSION['flash'] = 'Cpf /ou Password';
        $this->redirect('/ksi/adm/login-adm');
        exit;
      }
    }
  }

  public function checkCpf()
  {
    $array = ['error' => ''];
    $cpf = filter_input(INPUT_GET, 'cpf');

    if ($cpf) {
      if (LoginHandler::checkCpf($cpf)) {
        $array['cpf'] = true;
      } else {
        $array['cpf'] = false;
      }

    } else {
      $array['error'] = "ENão há o cpf";
    }

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    echo json_encode($array);
  }

  public function checkEmail()
  {
    $array = ['error' => ''];
    $email = filter_input(INPUT_GET, 'email');

    if ($email) {
      if (LoginHandler::checkEmail($email)) {
        $array['email'] = true;
      } else {
        $array['email'] = false;
      }

    } else {
      $array['error'] = "ENão há o email";
    }

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    echo json_encode($array);
  }
  public function create()
  {
    $photoFinal = "";
    $inputs = filter_input_array(INPUT_POST);
    if (isset($_FILES['photo']) && !empty($_FILES['photo']['tmp_name'])) {
      $newPhoto = $_FILES['photo'];

      if (in_array($newPhoto['type'], ['image/jpeg', 'image/jpg', 'image/png'])) {
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
          $finalImage, $image,
          $x, $y, 0, 0,
          $newWidth, $newHeight, $widthOrig, $heightOrig
        );
        
      }
    }

    $photoFinal = md5(time() . rand(0, 9999)) . '.jpg';
    $inputs['photo'] = $photoFinal;

    $token = LoginHandler::create($inputs);
    if ($token !== '') {
      $id = LoginHandler::countId();
      $dir = './assets/media/user';
      if (is_dir($dir)) {
        mkdir($dir . '/' . $id['id'], 0777, true);
        imagejpeg($finalImage, $dir . '/' . $id['id'] . '/' . $photoFinal, 100);
      }
      $_SESSION['flash-msg'] = "Adicionado com sucesso!";
      $this->redirect('/ksi/adm/area-adm');
    }
  }
}