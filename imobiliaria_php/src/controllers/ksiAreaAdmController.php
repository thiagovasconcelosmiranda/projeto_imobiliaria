<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\ImovelHandler;

class KsiAreaAdmController extends Controller
{
    private $infUser;
    
    public function __construct()
    {
        if (!empty(LoginHandler::checkLogin())) {
            $this->infUser = LoginHandler::checkLogin();
        } else {
           $this->redirect('/');
           exit;
        }
    }
    
    public function index()
    {  
        if(!$this->infUser->administrador){
          $this->redirect('/ksi/adm/login-adm');
          exit;
        }

        $imoveis = ImovelHandler::searchAll();
        $page = "";
    
        $this->render('ksi/areaAdm', [
            'page' => $page,
            'imoveis' =>$imoveis,
            'infUser' => $this->infUser 
        ]); 
        
    }
}