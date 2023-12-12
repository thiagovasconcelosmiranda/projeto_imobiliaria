<?php
//
namespace src\controllers;

use \core\Controller;

class KsiUserAdmController extends Controller
{

    public function index()
    { 
        $this->render('ksi/adm/user-adm');
    }

}