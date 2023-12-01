<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Login;

class LoginHandler extends Controller
{
  private static function _loginList($data)
  {
    
    $user = new Login();
    $user->id = $data['id'];
    $user->nome = $data['nome'];
    $user->password = $data['password'];
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
    $user->token = $data['token'];
    $user->created_at = $data['created_at'];
    $user->updated_at = date('Y/m/d H:m:s');
  
    return $user;
  }

  public static function checkLogin()
  {
    if (!empty($_SESSION['token'])) {
      $token = $_SESSION['token'];
      $data = Login::select()->where('token', $token)->one();
      if (count($data) > 0) {
        $data['token'] = $token;
        
        return self::_loginList($data);
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

  public static function update_form($array)
  {
    
   
    $user = self::checkLogin();
    if($user){
      
      $hash = password_hash($array['password'], PASSWORD_DEFAULT);
      if (!$array['password']) {
        $array['password'] = $user->password;
      } else {
        $array['password'] = $hash;
      }
    }
   
    Login::update()
      ->set('email', $array['email'])
      ->set('password', $array['password'])
      ->set('end', $array['cep'])
      ->set('num', $array['num'])
      ->set('bairro', $array['bairro'])
      ->set('cidade', $array['cidade'])
      ->set('uf', $array['uf'])
      ->set('telefone_residencial', $array['telefone_residencial'])
      ->set('celular', $array['celular'])
      ->set('telefone_comercial', $array['telefone_comercial'])
      ->set('cep_comercial',$array['cep_comercial'])
      ->set('end_comercial', $array['end_comercial'])
      ->set('num_comercial', $array['num_comercial'])
      ->set('bairro_comercial', $array['bairro_comercial'])
      ->set('cidade_comercial', $array['cidade_comercial'])
      ->set('uf_comercial', $array['uf_comercial'])
      ->set('photo', $array['photo'])
      ->set('token', $array['token'])
      ->set('updated_at', date('Y/m/d H:m:n'))
      ->where('id', $array['id'])
      ->execute();
    return true;
  }
}

