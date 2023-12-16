<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;


class KsiUserController extends Controller
{
    private $infoUser;
    public function __construct()
    {
        $this->infoUser = LoginHandler::checkLogin();
        if (!$this->infoUser) {
           // $this->redirect("/");
        }
    }

    public function search()
    {      
        $array = [];

        $search = filter_input(INPUT_GET, 'search');

        if($search){
           $array[] = LoginHandler::search($search);
        }else{
           $array[] = LoginHandler::findAll();
         }
           
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($array);
    }

}