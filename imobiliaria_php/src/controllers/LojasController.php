<?php
namespace src\controllers;

use \core\Controller;

class LojasController extends Controller
{

    public function index()
    {
        $about = "flex";
        $activeLink = 'Lojas';
         $this->render('lojas', [
             'aboutFlex'=>$about,
             'activeLink' => $activeLink
            ]);   
    }

}