<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Login;

class LoginHandler extends Controller {

    public static function ckeckLogin(){
      if(isset($_SESSION['token'])){
         $token = $_SESSION['token'];
         $data = Login::select()->where('token', $token)->one();
         if(count($data) > 0){
             $user = new Login();
             $user->id = $data['id'];
             $user->nome = $data['nome'];
             $user->cpf = $data['cpf'];
             $user->email = $data['email'];

             return $user;

         }
         return false;
      }
    }

    public static function veryLogin($cpf, $password){

        $user = Login::select()->where('cpf', $cpf)->one();

        if($user){
           if(password_verify($password, $user['password'])){
             $token = md5(time().rand(0,9999).time());
            
             Login::update()
             ->set('token', $token)
             ->where('cpf', $cpf)
             ->execute();
             return  $token;
           }

           return false;
            
           
        }

       

        
    }

}