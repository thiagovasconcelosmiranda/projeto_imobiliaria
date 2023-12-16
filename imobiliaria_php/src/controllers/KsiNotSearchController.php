<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\NotSearchHandler;


class KsiNotSearchController extends Controller
{
    private $infoUser;
    public function __construct()
    {
        $this->infoUser = LoginHandler::checkLogin();
        if (!$this->infoUser) {
           $this->redirect("/");
        }
    }

    public function index()
    {      
        $this->render('ksi/adm/notSearch');
    }

    public function searchNotSearch($nome){
        $array= [];
        $search = filter_input(INPUT_GET, 'search');

        if($search){
            $array[] = NotSearchHandler::search($search);
        }else{
            $array[] = NotSearchHandler::findByAll();
        }

        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($array);
    }

    public function remove($att){
        $array = ['error' => ''];

        $id = $att['id'];

        if($id){
            $array[] = NotSearchHandler::remove($id);
        }else{
            $array['error'] = 'Não há id';
        }

        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($array);
    }
}