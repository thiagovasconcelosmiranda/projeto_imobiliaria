<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class KsiLoginAdmController extends Controller
{
    public function index()
    {
        $flash = "";
        if(!empty($_SESSION['flash'])){
           $flash = $_SESSION['flash'];
           $_SESSION['flash'] = "";
        }

        $page = "teste";
        $this->render('ksi/login-adm',[
                'page' => $page,
                'flash' => $flash
            ]); 
    }

     public function loginAdmAccess(){
          $cpf = filter_input(INPUT_POST, 'cpf');
          $password = filter_input(INPUT_POST, 'password');

          if($cpf && $password){
          if($token = LoginHandler::veryLogin($cpf, $password, "Concordo com os termos da política", true)){
            $_SESSION['token'] = $token;
            $this->redirect('/ksi/adm/area-adm');
            exit;
          }else{
            $_SESSION['flash'] = 'Cpf /ou Password';
            $this->redirect('/ksi/adm/login-adm');
            exit;
          }
          }
    }

    public function checkCpf(){
        $array = ['error' => ''];
        $cpf = filter_input(INPUT_GET, 'cpf');

        if($cpf){
          if(LoginHandler::checkCpf($cpf)){
            $array['cpf'] = true;
          }else{
            $array['cpf'] = false;
          }

        }else{
          $array['error'] ="ENão há o cpf";
        }

         header('Access-Control-Allow-Origin: *');
         header('Content-Type: application/json');
         echo json_encode( $array);
    }

    public function checkEmail(){
      
    $array = ['error' => ''];
    $email = filter_input(INPUT_GET, 'email');

    if($email){
      if(LoginHandler::checkEmail($email)){
        $array['email'] = true;
      }else{
        $array['email'] = false;
      }

    }else{
      $array['error'] ="ENão há o email";
    }

     header('Access-Control-Allow-Origin: *');
     header('Content-Type: application/json');
     echo json_encode( $array);
  }
   public function  create(){
    $inputs = filter_input_array(INPUT_POST);
    print_r($inputs);
   }
}