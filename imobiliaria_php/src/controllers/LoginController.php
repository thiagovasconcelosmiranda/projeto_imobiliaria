<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class LoginController extends Controller
{

  public function checkLogin()
  {
    $cpf = filter_input(INPUT_POST, 'cpf');
    $password = filter_input(INPUT_POST, 'password');

    if ($cpf && $password) {
      $token = LoginHandler::veryLogin($cpf, $password);
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
    if (!empty($_SESSION['token'])) {
      $_SESSION['token'] = '';
    }
    $this->redirect('/');
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
      $array['contrato'] = $input['contrato'];
      $array['token'] = $_SESSION['token'];

      if (isset($_FILES['photo']) && !empty($_FILES['photo']['tmp_name'])) {
        $newPhoto = $_FILES['photo'];

        if(in_array($newPhoto['type'], ['image/png', 'image/jpg', 'image/jpeg'])) {
          $photoWidth = 200;
          $photoHeight = 200;

          list($widthOrig, $heightOrig) = getimagesize($newPhoto['tmp_name']);
            $ratio = $widthOrig / $heightOrig;

            $newWidth = $photoWidth;
            $newHeight = $newWidth / $ratio;
            
            if($newHeight < $photoHeight){
                $newHeight = $photoHeight;
                $newWidth = $newHeight * $ratio;
            }

            $x = $photoWidth - $newWidth;
            $y = $photoHeight - $newHeight;

            $x = $x<0 ? $x/2 : $x;
            $y = $y<0 ? $y/2 : $y;

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
              $finalImage ,$image,
              $x, $y, 0, 0,
              $newWidth, $newHeight, $widthOrig, $heightOrig
            );
            $photoName = md5(time().rand(0,9999)).'.jpg';

            $dir = "./assets/media/user/".$user->id."/";

            if(is_dir($dir)){
              unlink($dir.$user->photo);
            }
            imagejpeg($finalImage, './assets/media/user/'.$user->id.'/'.$photoName, 100);
            $array['photo'] =  $photoName;
        }   
      }
      else{
        $array['photo'] = $user->photo;
      }

      if (empty($array['contrato'])) {
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

  public function deletar()
  {

  }
}