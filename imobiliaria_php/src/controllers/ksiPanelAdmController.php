<?php 
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\ImovelHandler;
use \src\handlers\NotSearchHandler;
use \src\handlers\AnuncioHandler;

class ksiPanelAdmController extends Controller
{

    public function index()
    {

        $imoveis = ImovelHandler::findByAll();
        $users = LoginHandler::findAll();
        $notSearchs = NotSearchHandler::findByAll();
        $anuncios = AnuncioHandler::findByAll();
         $status = LoginHandler::checkStatus('online');

        $flash = "";
        if(!empty($_SESSION['flash-msg'])){
         $flash = $_SESSION['flash-msg'];
         $_SESSION['flash-msg'] = "";
        }
        
        $this->render('ksi/adm/panel-adm',[
            'flash'=> $flash,
            'imoveis' => $imoveis,
            'usuarios' => $users, 
            'notSearchs' => $notSearchs,
            'anuncios' => $anuncios,
            'status' => $status
        ]);
    }

}