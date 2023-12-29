<?php
namespace src\controllers;

use \core\Controller;

use \src\handlers\LoginHandler;

class KsiPanelController extends Controller
{

    private $infoUser;

    public function __construct(){

        if(!$this->infoUser = LoginHandler::checkLogin()){
            echo "voce não tem acesso";
        }
    }

    public function index()
    {
        $flash="";
        if(!empty($_SESSION['flash'])){
         $flash = $_SESSION['flash'];
         $_SESSION['flash'] = "";
        }

        $this->render('ksi/panel',[
            'flash'=> $flash,
            'infoUser' => $this->infoUser
        ]);
    }
}