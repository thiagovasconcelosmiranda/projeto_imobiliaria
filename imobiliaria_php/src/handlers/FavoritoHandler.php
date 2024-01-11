<?php
namespace src\handlers;


use \core\Controller;
use \src\models\Favorito;

class FavoritoHandler extends Controller
{

  public static function findById($login_id, $imovel_id)
  {
    
    
    $data = Favorito::select()
     ->where('login_id', $login_id)
     ->where('imovel_id', $imovel_id)
    ->one();
    
    return $data;
  }

  public static function findByImobileId($id){
      $data = Favorito::select()
      ->where('imovel_id', $id)
      ->execute();

      return $data;
  }

  public static function create($array, $login_id)
  {

    Favorito::insert([
      'foto1' =>$array['foto1'],
      'ref' => $array['ref'],
      'tipo' => $array['tipo'],
      'bairro' => $array['bairro'],
      'preco_vendas' => $array['preco_vendas'],
      'preco_aluguels' => $array['preco_aluguels'],
      'login_id' => $login_id,
      'imovel_id' => $array['id'],
      
    ])
    ->execute();

    return true;
  }

  public static function delete($array)
  {
    Favorito::delete()
      ->where('login_id', $array['login_id'])
      ->where('imovel_id', $array['imovel_id'])
      ->execute();
    return true;
  }

}