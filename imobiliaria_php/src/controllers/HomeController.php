<?php
namespace src\controllers;
use \core\Controller;


class HomeController extends Controller {
    public function index() {
        $about = "flex";
        $activeLink = 'home';
         $this->render('home', [
             'aboutFlex'=>$about,
             'activeLink' => $activeLink
            ]);   
    }
}