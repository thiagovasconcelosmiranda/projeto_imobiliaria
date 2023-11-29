<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class AreaClienteController extends Controller
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
        $this->render('areaCliente', [
            'infUser' => $this->infUser
        ]); 
    }
}