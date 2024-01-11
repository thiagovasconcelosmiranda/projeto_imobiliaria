<?php
namespace src\controllers;
use \core\Controller;
use src\handlers\FavoritoHandler;


class HomeController extends Controller {
    public function index() {
        $favorites = FavoritoHandler::findByAll();
        $about = "flex";
        $activeLink = 'home';
         $this->render('home', [
             'aboutFlex'=>$about,
             'activeLink' => $activeLink,
             'favorites' => $favorites
            ]);   
    }
}