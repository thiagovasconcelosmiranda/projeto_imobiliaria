<?php //ksiViewUserController

namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;


class ksiViewUserController extends Controller{
  private $infoUser;
  public function __construct(){
    $this->infoUser = LoginHandler::checkLogin();
  }
  public function index(){

    $id_user = filter_input(INPUT_GET, 'id_user');
   

    $user = LoginHandler::findById($id_user);

   if(!empty($user)){
    $this->infoUser = $user;
   }

  
     
    $this->render('ksi/adm/view_user', [
      'infoUser' => $this->infoUser
    ]);
  }
}