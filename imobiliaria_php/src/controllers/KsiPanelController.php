<?php
namespace src\controllers;

use \core\Controller;

class KsiPanelController extends Controller
{

    public function index()
    {
        $flash = "";
        if(!empty($_SESSION['flash'])){
         $flash = $_SESSION['flash'];
         $_SESSION['flash'] = "";
        }
        
        $this->render('ksi/panel',[
            'flash'=> $flash
        ]);
    }

}