<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Imovel;
use \src\models\End;
use \src\models\Venda;
use \src\models\Aluguel;

class ImovelHandler extends Controller {
    public static function findAll($page, $limit){
      $imovel= Imovel::select()
      ->page($page,$limit)
      ->join('ends', 'ends.imovel_id','=', 'imovels.id')
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->get();
      return $imovel;
    }

    public function add() {
   
    }

    public static function findId($id){
      $imovel= Imovel::select()
      ->join('ends', 'ends.imovel_id','=', 'imovels.id')
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->where('imovels.id',$id)
      ->get();
       return $imovel;
    }

    public  static function findType($info, $page, $limit){
      $imovel= Imovel::select()
      ->page($page,$limit)
      ->join('ends', 'ends.imovel_id','=', 'imovels.id')
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->where('imovels.tipo', $info)
      ->get();
      return $imovel;
    }

    public static function findAllName($key, $value){
      $imovel = []; 
      //echo $key;
      //exit;
      if($key != 'aluguels' && $key != 'vendas' && $key != 'bairro' ){
        $imovel= Imovel::select()
         ->join('ends', 'ends.imovel_id','=', 'imovels.id')
         ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
         ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
         ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
         ->where('imovels.'.$key, $value)
         ->get();
        }else{

          if($key == 'aluguels' || $key == 'vendas'){
            $imovel= Imovel::select()
            ->join('ends', 'ends.imovel_id','=', 'imovels.id')
            ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
            ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
            ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
            ->where($key.'.preco_'.$key, $value)
            ->get();
          }

          if($key == 'bairro'){
            $imovel= Imovel::select()
            ->join('ends', 'ends.imovel_id','=', 'imovels.id')
            ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
            ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
            ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
            ->where('ends.'.$key, $value)
            ->get();
          }
          
      }

      return $imovel;
    }

    public static function findCount($info){
      $imovel = Imovel::select()
      ->join('ends', 'ends.imovel_id','=', 'imovels.id')
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->where('imovels.tipo', $info)
      ->count();
      return $imovel;
    }

    public static function findAllCount(){
      $imovel = Imovel::select()
      ->join('ends', 'ends.imovel_id','=', 'imovels.id')
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->count();
      return $imovel;
    }

    public static function searchAll(){
      $imovel = Imovel::select()
      ->join('ends', 'ends.imovel_id','=', 'imovels.id')
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->where('imovels.tipo', 'residencial/apartamento')
      ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
      ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
      ->get();
      return $imovel;
    }

    public static function enterprise($name, $item, $collumm){
        $imovel = Imovel::select()
        ->join('ends', 'ends.imovel_id','=', 'imovels.id')
        ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
        ->join('vendas', 'vendas.id', '=', 'imovels.venda_id')
        ->join('aluguels', 'aluguels.id', '=', 'imovels.aluguel_id')
        ->where('imovels.tipo', 'residencial/apartamento')
        ->where($collumm.$name, 'like', '%'.$item.'%')
        ->get();
        return $imovel;
     
    }

    public static function saleAll(){
      $list =  Venda::select()->orderBy(['preco_vendas' => 'asc'])->get();
      return $list;
    }

    public static function rentAll(){
      $list  =  Aluguel::select()->orderBy(['preco_aluguels' => 'asc'])->get();
      return $list;
    }
     
    public static function update($id){
       //
    }
    
    public static function delete($id){
       //
    }
}