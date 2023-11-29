<?php
namespace src\controllers;

use \core\Controller;

class KsiPanelController extends Controller
{

    public function index()
    {
        $this->render('ksi/panel');
    }

}