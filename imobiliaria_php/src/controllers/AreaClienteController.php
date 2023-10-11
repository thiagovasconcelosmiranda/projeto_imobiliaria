<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class AreaClienteController extends Controller {
    private $loggedLogin;
    
    public function __construct(){
        $this->loggedLogin = LoginHandler::ckeckLogin();
          if($this->loggedLogin == false){
            $this->redirect('/');
          }
    }

    public function index() {
        $this->render('AreaCliente');
    }

}