<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;


class KsiAddImmobileController extends Controller
{
    private $infoUser;
    public function __construct()
    {
        $this->infoUser = LoginHandler::checkLogin();
        if (!$this->infoUser) {
            $this->redirect("/");
        }
    }

    public function index()
    {      
        $this->render('ksi/adm/add-immobile');
    }

}