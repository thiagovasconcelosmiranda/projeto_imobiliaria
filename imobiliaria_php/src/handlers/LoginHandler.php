<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Login;

class LoginHandler extends Controller
{

  public static function checkLogin()
  {
    if (!empty($_SESSION['token'])) {
      $token = $_SESSION['token'];
      $data = Login::select()->where('token', $token)->one();
    
      if (count($data) > 0) {
        $user = new Login();
        $user->id = $data['id'];
        $user->nome = $data['nome'];
        $user->cpf = $data['cpf'];
        $user->email = $data['email'];
        $user->telefone_residencial = $data['telefone_residencial'];
        $user->telefone_comercial = $data['telefone_comercial'];
        $user->celular = $data['celular'];
        $user->photo = $data['photo'];
        $user->cep = $data['cep'];
        $user->end = $data['end'];
        $user->num = $data['num'];
        $user->bairro = $data['bairro'];
        $user->cidade = $data['cidade'];
        $user->uf = $data['uf'];
        $user->cep = $data['cep'];
        $user->end = $data['end'];
        $user->num = $data['num'];
        $user->bairro = $data['bairro'];
        $user->cidade = $data['cidade'];
        $user->uf = $data['uf'];
        $user->cep_comercial = $data['cep_comercial'];
        $user->end_comercial = $data['end_comercial'];
        $user->num_comercial = $data['num_comercial'];
        $user->bairro_comercial = $data['bairro_comercial'];
        $user->cidade_comercial = $data['cidade_comercial'];
        $user->uf_comercial = $data['uf_comercial'];
        return $user;
      }
      return false;
    }
  }

  public static function veryLogin($cpf, $password)
  {

    $user = Login::select()->where('cpf', $cpf)->one();
    if ($user) {
      if (password_verify($password, $user['password'])) {
        $token = md5(time() . rand(0, 9999) . time());
        Login::update()
          ->set('token', $token)
          ->where('cpf', $cpf)
          ->execute();
        return $token;
      }
      return false;
    }
  }
}