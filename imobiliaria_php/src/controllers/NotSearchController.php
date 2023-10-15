<?php
namespace src\controllers;

use \core\Controller;

class NotSearchController extends Controller {

    public function index() {
        $this->render('notSearch');
    }

    public function add(){
       $array = filter_input_array(INPUT_POST);
       echo '<pre>';
         print_r($array);
       echo '<pre/>';
    }

}