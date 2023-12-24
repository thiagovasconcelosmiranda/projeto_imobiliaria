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
    $user->administrador = $data['administrador'];
    $user->token = $data['token'];
    $user->status = $data['status'];
    $user->created_at = $data['created_at'];
    $user->updated_at = date('Y/m/d H:m:s');

    return $user;
  }

  public static function checkToken($token){
    $user = Login::select()
    ->where('token', $token)
    ->one();
    if($user){
        return $user;
    }else{
      return false;
    }
  }
  public static function checkStatus($status){
      $status = Login::select()
      ->where('status', $status)
      ->get();

      return $status;
  }

  public static function checkLogin()
  {
    if (!empty($_SESSION['token'])) {
      $token = $_SESSION['token'];
      $data = self::checkToken($token);

      if (!empty($data)) {
        if (count($data) > 0) {
          $data['token'] = $token;
          return self::_loginList($data);
        }
      }
      return false;
    }
  }

  public static function findById ($id) {
    $user = Login::select()
      ->where('id', $id)  
      ->one();
      $list_user = self::_loginList($user);

      return $list_user;
  }

  public static function findAll()
  {
    $user = Login::select()->get();
    return $user;
  }

  public static function checkCpf($cpf)
  {
    $user = Login::select()
      ->where('cpf', $cpf)
      ->one();

    if ($user) {
      return $user;
    }
    return false;
  }

  public static function checkEmail($email)
  {
    $user = Login::select()
      ->where('email', $email)
      ->one();

    if ($user) {
      return true;
    }
    return false;
  }


  public static function veryLogin($cpf, $password, $contratoPolitica, $adm=false, $status)
  {
   
    $user = Login::select()
      ->where('cpf', $cpf)
      ->where('administrador', $adm)
      ->one();

    if ($user) {
      if (password_verify($password, $user['password'])) {
        $token = md5(time() . rand(0, 9999) . time());
        Login::update()
          ->set('token', $token)
          ->set('contrato_politica', $contratoPolitica)
          ->set('status', $status)
          ->where('cpf', $cpf)
          ->execute();
        return $token;
      }
    }
  }

  public static function search($nome)
  {
    $usuario = Login::select()
      ->where('nome', 'like', '%' . $nome . '%')
      ->execute();

    return $usuario;
  }


  public static function create($array)
  {
    $hash = password_hash($array['new_password'], PASSWORD_DEFAULT);
    $token = md5(time() . rand(1, 9999));
    $array['new_password'] = $hash;
    $array['token'] = $token;
    
   $data = Login::insert([
      'photo' => $array['photo'],
      'nome' => $array['nome'],
      'cpf' => $array['cpf'],
      'email' => $array['new_email'],
      'password' => $array['new_password'],
      'telefone_comercial' => $array['tel_comercial'],
      'telefone_residencial' => $array['tel_residencial'],
      'celular' => $array['celular'],
      'cep' => $array['cep'],
      'end' => $array['end'],
      'num' => $array['num'],
      'bairro' => $array['bairro'],
      'cidade' => $array['cidade'],
      'uf' => $array['uf'],
      'cep_comercial' => $array['cep_comercial'],
      'end_comercial' => $array['end_comercial'],
      'num_comercial' => $array['num_comercial'],
      'bairro_comercial' => $array['bairro_comercial'],
      'cidade_comercial' => $array['cidade_comercial'],
      'uf_comercial' => $array['uf_comercial'],
      'token' => $array['token'],
      'login_id' => $array['login_id'],
      'updated_at' => date('Y/m/d H:m:s'),
      'created_at' => date('Y/m/d H:m:s'),
    ])
    ->execute();
      return $data;
  }

  public static function statusUpdate($array){
     Login::update([
      'status'=> $array->status
     ])
     ->where('id', $array->id)
     ->execute();

     return true;
  }

  public static function update_form($array)
  {
    $user = self::checkLogin();
    if ($user) {
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
      ->set('telefone_residencial', (empty($array['telefone_residencial']) ?
        $array['telefone_residencial'] ="" : $array['telefone_residencial']))
      ->set('celular', $array['celular'])

      ->set('telefone_comercial', (empty($array['telefone_comercial']) ?
        $array['telefone_comercial'] ="" : $array['telefone_comercial']))

      ->set('cep_comercial', (empty($array['cep_comercial']) ?
        $array['cep_comercial'] ="" : $array['cep_comercial']))

      ->set('end_comercial',(empty($array['end_comercial']) ?
        $array['end_comercial'] ="" : $array['cep_comercial']))

      ->set('num_comercial', (empty($array['num_comercial']) ?
        $array['num_comercial'] ="" : $array['num_comercial']))

      ->set('bairro_comercial', (empty($array['bairro_comercial']) ?
      $array['bairro_comercial'] ="" : $array['bairro_comercial']))

      ->set('cidade_comercial', (empty($array['cidade_comercial']) ?
      $array['cidade_comercial'] ="" : $array['cidade_comercial']))

      ->set('uf_comercial', (empty($array['uf_comercial']) ?
        $array['uf_comercial'] ="" : $array['uf_comercial']))

      ->set('photo', (empty($array['photo']) ?
        $array['photo'] ="Vazio" : $array['photo']))

      ->set('token', $array['token'])

      ->set('contrato_politica',  (empty($array['contrato_politica']) ?
         $array['contrato_politica'] === 'Aguardando' : 
         $array['contrato_politica'] ))

      ->set('updated_at', date('Y/m/d H:m:n'))

      ->set('status', (empty($array['status']) ?
         $array['status'] ="offline" : $array['status']))

      ->where('id', $array['id'])
      ->execute();
     
    return true;
  }

  public static function delete($id)
  {
    Login::delete()
      ->where()
      ->execute();
    return true;
  }

  public static function countId()
  {
    $user = Login::select('id')
    ->orderBy(['id' => 'desc'])
    ->one();
    return $user;
  }

}



