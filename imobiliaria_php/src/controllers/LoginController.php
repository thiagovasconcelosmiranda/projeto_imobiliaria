<?php
namespace src\controllers;

use \core\Controller;
use \models\Login;

class LoginController extends Controller {

    public function login() {
       $cpf = filter_input(INPUT_POST, 'cpf');
       $password= filter_input(INPUT_POST, 'password');

       if($cpf && $password){
          echo "Há dados";
       }else{
        $this->redirect('/?login=false');
        exit;
       }
    }

    public function add(){
      
    }

    public function findId(){
      
    }

    public function update(){
      
    }

    public function deletar(){
      
    }


}