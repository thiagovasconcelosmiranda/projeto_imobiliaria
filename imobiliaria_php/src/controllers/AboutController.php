<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\FavoritoHandler;

class AboutController extends Controller
{

    public function index()
    {
        $favorites = FavoritoHandler::findByAll();
        $about = "none";
        $activeLink = 'sobre';
        
        $this->render('sobre', [
            'aboutFlex' => $about,
            'activeLink' => $activeLink,
            'favorites' => $favorites
        ]);
    }

}