<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Imovel;
use \src\models\Venda;
use \src\models\Aluguel;

class ImovelHandler extends Controller
{

  private static function __listObjectImmobile($data){
    $imovel = [];
    foreach($data as $item){
      $imovel[] = [
            'id' => $item['id'],
            'ref' =>  $item['ref'],
            'tipo' =>  $item['tipo'],
            'condominio' => $item['condominio'],
            'qtd_quarto' => $item['qtd_quarto'],
            'qtd_sala' => $item['qtd_sala'],
            'qtd_banheiro' => $item['qtd_banheiro'],
            'qtd_cozinha' => $item['qtd_cozinha'],
            'qtd_varanda' => $item['qtd_varanda'],
            'qtd_vaga' =>  $item['qtd_vaga'],
            'outos' =>  $item['outros'],
            'condicao' =>  $item['condicao'],
            'area_terreno' => $item['area_terreno'],
            'tipo_imovel' => $item['tipo_imovel'],
            'classificacao' => $item['classificacao'],
            'descricao' => $item['descricao'],
            'area_laser' => $item['area_laser'],
            'disponibilidade' => $item['disponibilidade'],
            'foto1' => $item['foto1'],
            'foto2' => $item['foto2'],
            'foto3' => $item['foto3'],
            'foto4' => $item['foto4'],
            'foto5' => $item['foto5'],
            'preco_vendas' =>  $item['preco_vendas'],
            'preco_aluguels' =>  $item['preco_aluguels'],
            'cep' =>  $item['cep'],
            'end' =>  $item['end'],
            'num' =>  $item['num'],
            'bairro' =>  $item['bairro'],
            'cidade' =>  $item['cidade'],
            'uf' => $item['uf'],  
            'construtora_id' => $item['construtora_id'],
            'favorito'  => FavoritoHandler::findByImmobile($item['id']),
            'construtora' => ConstrutoraHandler::findById($item['construtora_id'])
       ]; 
    }
    return $imovel;
  }
  public static function findByPublished($limit)
  {
    
    $data = Imovel::select()
      ->limit($limit)
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->orderBy(['imovels.id' => 'desc'])
      ->get();

     return self::__listObjectImmobile($data);

  }

  public static function findId($id)
  {
  
    $data = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('construtoras', 'construtoras.id', '=', 'imovels.construtora_id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where('imovels.id', $id)
      ->one();
    return $data;
  }

  public static function findLoginId($id)
  {

    $imovel = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where('imovels.login_id', $id)
      ->one();

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
  { $imovel = [];
    $data = Imovel::select()
      ->page($page, $limit)
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where( 'imovels.tipo', 'like', '%' . $info . '%')
      ->get();
      return self::__listObjectImmobile($data);
  }

  public static function findAllName($key, $value)
  {
  
    $imovel = [];
    $data = Imovel::select()
    ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
    ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
    ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
    ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
    ->where($key, $value)
    ->get();

    return self::__listObjectImmobile($data);
  }
  public static function findRef($ref){
    $imovel = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where('imovels.ref', $ref)
      ->get();

      return $imovel;
  }
  
  public static function findStore(){
    $imovel = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where('imovels.tipo', 'comercial/lojaSopping')
      ->get();

      return $imovel;
  }
  
  public static function searchStore($key, $value)
  {
    $imovel = [];
    $imovel = Imovel::select()
    ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
    ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
    ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
    ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
    ->where('imovels.tipo', 'comercial/lojaSopping')
    ->where($key, $value)
    ->get();
    
  
    return $imovel;
  }

  public static function findCount($info)
  {
    $imovel = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where( 'imovels.tipo', 'like', '%' . $info . '%')

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
    $imovel = [];
    $data = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where('login_id', $login_id)
      ->execute();
      return self::__listObjectImmobile($data);
  }

  public static function searchAll()
  {
    $value = "apartamento";
    $imovel = [];
    $data = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where('tipo', 'like', "%" . $value . '%')
      ->get();

      return self::__listObjectImmobile($data);
  }

  public static function searchEnterprise($name, $item)
  {
     $table = "";
    if($name == 'status'){
      $table = 'imovels.';
    }

    $imovel = [];
    $data = Imovel::select()
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->join('ends', 'ends.imovel_id', '=', 'imovels.id')
      ->where('imovels.tipo', 'residencial/apartamento')
      ->where($name, 'like', '%' . $item . '%')
      ->get();
      return self::__listObjectImmobile($data);

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
      'construtora_id' => $array['construtora_id'],
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

  public static function firstId()
  {
    $firstId = Imovel::select('id')
      ->orderBy(['id' => 'asc'])
      ->one();
    return $firstId;
  }

  static function lastId()
  {
    $lastId = Imovel::select('id')
      ->orderBy(['id' => 'desc'])
      ->one();
    return $lastId;
  }



  public static function update($id, $imovel)
  {

    Imovel::update([
      'classificacao' => $imovel['classificacao'],
      'tipo' => $imovel['tipo'],
      'condicao' => $imovel['condicao'],
      'area_terreno' => $imovel['area_terreno'],
      'area_laser' => $imovel['area_laser'],
      'qtd_vaga' => $imovel['qtd_vaga'],
      'construtora_id' => $imovel['construtora_id'],
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