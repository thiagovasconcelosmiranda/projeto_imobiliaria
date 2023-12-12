<?php 
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\ImovelHandler;

class ksiPanelAdmController extends Controller
{

    public function index()
    {

        $imoveis = ImovelHandler::findByAll();
        $users = LoginHandler::findAll();

        $flash = "";
        if(!empty($_SESSION['flash'])){
         $flash = $_SESSION['flash'];
         $_SESSION['flash'] = "";
        }
        
        $this->render('ksi/adm/panel-adm',[
            'flash'=> $flash,
            'imoveis' => $imoveis,
            'usuarios' => $users
        ]);
    }

}