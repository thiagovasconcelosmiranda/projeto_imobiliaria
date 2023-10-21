<?php
namespace src\controllers;

use \core\Controller;

class AboutController extends Controller {

    public function index() {
        $about = "none";
        $activeLink = 'sobre';
        $this->render('sobre', [
            'aboutFlex' => $about,
             'activeLink' => $activeLink]);
    }

}