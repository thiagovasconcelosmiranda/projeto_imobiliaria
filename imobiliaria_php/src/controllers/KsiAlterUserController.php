<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class KsiAlterUserController extends Controller
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
        $user= [];
        $adm = filter_input(INPUT_GET, 'adm');
        $id_user = filter_input(INPUT_GET, 'id_user');
        
        if($id_user){
           $user[] = LoginHandler::findById($id_user);
        }else{
           $user[] = $this->infoUser;
        }

        $this->render('ksi/alter-user', [
            'infoUser' => $user[0],
            'adm' => $adm,
        ]);
    }

}