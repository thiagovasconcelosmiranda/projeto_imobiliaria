<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class KsiAreaClienteController extends Controller
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
    {   $page="";
        $this->render('ksi/areaCliente', [
            'infUser' => $this->infUser,
            'page'=> $page
        ]); 
    }
}