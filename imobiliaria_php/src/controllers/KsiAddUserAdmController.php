<?php
//
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;




class KsiAddUserAdmController extends Controller
{

    public function index()
    { 
        $this->render('ksi/adm/add-user');
    }

}