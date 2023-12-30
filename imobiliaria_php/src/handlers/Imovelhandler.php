<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Imovel;
use \src\models\Venda;
use \src\models\Aluguel;
use \src\models\Document;

class ImovelHandler extends Controller
{
  public static function findByPublished($limit)
  {

    $imovel = Imovel::select()
      ->limit($limit)
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->orderBy(['imovels.id' => 'desc'])
      ->get();
    return $imovel;
  }

  public function add()
  {
  }

  public static function findId($id)
  {

    $imovel = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where('imovels.id', $id)
      ->get();

    return $imovel;




  }

  public static function findPhotoId($id)
  {
    $imovel = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where('ends.id', $id)
      ->get();
    return $imovel;
  }

  public static function findType($info, $page, $limit)
  {
    $imovel = Imovel::select()
      ->page($page, $limit)
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')

      ->where('imovels.tipo', $info)
      ->get();
    return $imovel;
  }

  public static function findAllName($key, $value)
  {
    $imovel = [];
    //echo $key;
    //exit;
    if ($key != 'aluguels' && $key != 'vendas' && $key != 'bairro' && $key != 'regiao') {
      $imovel = Imovel::select()
        ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
        ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
        ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
        ->join('ends', 'ends.imovel_id', '=', 'imovels.id')

        ->where('imovels.' . $key, $value)
        ->get();
    } else {

      if ($key == 'aluguels' || $key == 'vendas') {
        $imovel = Imovel::select()
          ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
          ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
          ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
          ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
          ->where($key . '.preco_' . $key, $value)
          ->get();
      }

      if ($key == 'bairro') {
        $imovel = Imovel::select()
          ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
          ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
          ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
          ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
          ->where('ends.' . $key, $value)
          ->get();
      }

      if ($key == 'regiao') {
        $imovel = Imovel::select()
          ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
          ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
          ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
          ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
          ->where('ends.' . $key, $value)
          ->get();
      }
    }
    return $imovel;
  }

  public static function findCount($info)
  {
    $imovel = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where('imovels.tipo', $info)
      ->count();
    return $imovel;
  }

  public static function findAllCount()
  {
    $imovel = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->count();
    return $imovel;
  }

  public static function ImmobileLoginId($login_id)
  {
    $imovel = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where('login_id', $login_id)
      ->execute();
    return $imovel;
  }

  public static function searchAll()
  {
    $imovel = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->get();
    return $imovel;
  }

  public static function enterprise($name, $item, $collumm)
  {
    $imovel = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where('imovels.tipo', 'residencial/apartamento')
      ->where($collumm . $name, 'like', '%' . $item . '%')
      ->get();
    return $imovel;

  }

  public static function saleAll()
  {
    $list = Venda::select()->orderBy(['preco_vendas' => 'asc'])->get();
    return $list;
  }

  public static function rentAll()
  {
    $list = Aluguel::select()->orderBy(['preco_aluguels' => 'asc'])->get();
    return $list;
  }

  public static function findByAll()
  {
    $imovel = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->get();
    return $imovel;
  }

  public static function search($value)
  {

    $imovel = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where('tipo', 'like', "%" . $value . '%')
      ->execute();

    return $imovel;
  }

  public static function create($array)
  {
    Imovel::insert([
      'ref' => $array['ref'],
      'aluguel_id' => $array['aluguel_id'],
      'classificacao' => $array['classificacao'],
      'tipo' => $array['tipo'],
      'condominio' => $array['condominio'],
      'qtd_quarto' => $array['qtd_quarto'],
      'qtd_sala' => $array['qtd_sala'],
      'qtd_banheiro' => $array['qtd_banheiro'],
      'qtd_cozinha' => $array['qtd_cozinha'],
      'qtd_varanda' => $array['qtd_varanda'],
      'qtd_vaga' => $array['qtd_vaga'],
      'outros' => $array['outros'],
      'condicao' => $array['condicao'],
      'login_id' => $array['login_id'],
      'venda_id' => $array['venda_id'],
      'update_at' => date('Y/m/d H:m:s'),
      'create_at' => date('Y/m/d H:m:s'),
      'area_terreno' => $array['area_terreno'],
      'tipo_imovel' => $array['tipo_imovel'],
      'descricao' => $array['descricao'],
      'area_laser' => $array['area_laser'],
      'disponibilidade' => $array['disponibilidade'],
    ])->execute();

    $lastId = self::lastId();
    return $lastId;
  }

   static function lastId(){
    $lastId = Imovel::select('id')
    ->orderBy(['id' => 'desc'])
   ->one();

   return $lastId;
  }



  public static function update($id ,$imovel)
  {

    Imovel::update([
     'classificacao' => $imovel['classificacao'],
     'tipo' => $imovel['tipo'],
     'condicao' => $imovel['condicao'],
     'area_terreno' => $imovel['area_terreno'],
     'area_laser' => $imovel['area_laser'],
     'qtd_vaga' => $imovel['qtd_vaga'],
     'condominio' => $imovel['condominio'],
     'disponibilidade' => $imovel['disponibilidade'],
     'qtd_varanda' => $imovel['qtd_varanda'],
     'qtd_quarto' => $imovel['qtd_quarto'],
     'qtd_sala' => $imovel['qtd_sala'],
     'qtd_banheiro' => $imovel['qtd_banheiro'],
     'qtd_cozinha' => $imovel['qtd_cozinha'],
     'outros' => $imovel['outros'],
     'descricao' => $imovel['descricao'],
     'update_at' => date('Y/m/d H:m:s')
    ])
    ->where('id', $id)
    ->execute();
    
    return true;
  }

  public static function delete($id)
  {
    Imovel::delete()
      ->where('id', $id)
      ->execute();

    return true;
  }
}