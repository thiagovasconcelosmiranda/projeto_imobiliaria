<?php
//
namespace src\controllers;

use \core\Controller;

class KsiAddUserAdmController extends Controller
{

    public function index()
    { 
        $this->render('ksi/adm/add-user');
    }

}