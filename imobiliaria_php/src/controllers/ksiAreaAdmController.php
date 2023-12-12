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
        }
    }
    
    public function index()
    {  
        $imoveis = ImovelHandler::searchAll();
        $page = "";
    
        $this->render('ksi/areaAdm', [
            'page' => $page,
            'imoveis' =>$imoveis,
            'infUser' => $this->infUser 
        ]); 
        
    }
}