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
            $_SESSION['flash'] = 'Cpf /ou Password invalidos ou voce não é colaborador';
            $this->redirect('/ksi/adm/login-adm');
            exit;
          }
          }
    }

}