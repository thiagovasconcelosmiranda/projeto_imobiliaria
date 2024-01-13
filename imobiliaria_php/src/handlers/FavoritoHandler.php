<?php
namespace src\handlers;


use \core\Controller;
use \src\models\Favorito;

class FavoritoHandler extends Controller
{

  public static function findByAll()
  {
    $data = Favorito::select()
      ->where('ip_client', self::__get_client_ip())
      ->where('navegador', self::__navigation())
      ->get();
    return $data;
  }

  public static function findByImmobile($imovel_id)
  {
    $data = Favorito::select()
      ->where('ip_client', self::__get_client_ip())
      ->where('navegador', self::__navigation())
      ->where('imovel_id', $imovel_id)
      ->get();
    return $data;
  }



  public static function create($array)
  {
    Favorito::insert([
      'foto1' => $array['foto1'],
      'ref' => $array['ref'],
      'tipo' => $array['tipo'],
      'bairro' => $array['bairro'],
      'cidade' => $array['cidade'],
      'preco_vendas' => $array['preco_vendas'],
      'preco_aluguels' => $array['preco_aluguels'],
      'imovel_id' => $array['id'],
      'navegador' => self::__navigation(),
      'ip_client' => self::__get_client_ip(),
      'descricao' => $array['descricao'],
      'qtd_quarto' => $array['qtd_quarto'],
      'qtd_sala' => $array['qtd_sala'],
      'qtd_cozinha' => $array['qtd_cozinha'],
      'qtd_banheiro' => $array['qtd_banheiro'],
      'qtd_varanda' => $array['qtd_varanda'],
      'area_laser' => $array['area_laser']
    ])
      ->execute();

    return true;
  }

  public static function delete($array)
  {
    $teste = Favorito::delete()
      ->where('imovel_id', $array['imovel_id'])
      ->where('navegador', self::__navigation())
      ->where('ip_client', self::__get_client_ip())
      ->execute();
    return $teste;
  }

  public static function __navigation()
  {
    $navigation = '';
    if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox/121.0')) {
      $navigation = 'You are using Firefox.';
    }
    if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
      $navigation = 'You are using Chrome.';
    }
    if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Edg')) {
      $navigation = 'You are using Edge.';
    }
    return $navigation;
  }

  public static function __get_client_ip()
  {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
      $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
      $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
      $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
      $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
      $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
      $ipaddress = 'UNKNOWN';
    return $ipaddress;
  }


}