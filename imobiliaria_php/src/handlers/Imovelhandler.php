<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Imovel;
use \src\models\End;
use \src\models\Foto;

class ImovelHandler extends Controller {
    public static function findAll($page, $limit){
      $imovel= Imovel::select()
      ->page($page,$limit)
      ->join('ends', 'ends.imovel_id','=', 'imovels.id')
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->get();
      return $imovel;
    }

    public function add() {
   
    }

    public static function findId($id){
      $imovel= Imovel::select()
      ->join('ends', 'ends.imovel_id','=', 'imovels.id')
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->where('imovels.id',$id)
      ->get();
       return $imovel;
    }

    public  static function findType($info, $page, $limit){
      $imovel= Imovel::select()
      ->page($page,$limit)
      ->join('ends', 'ends.imovel_id','=', 'imovels.id')
      ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
      ->where('imovels.tipo', $info)
      ->get();
      return $imovel;
    }

    public static function findAllName($dataInputs){
          foreach ($dataInputs as $key => $dataInput) {
             $imovel = Imovel::select()
             ->where('tipo', $dataInput)
             ->join('ends', 'ends.imovel_id','=', 'imovels.id')
             ->join('fotos', 'fotos.imovel_id', '=', 'imovels.id')
             ->get();
             return  $imovel;    
          }
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
     
    public static function update($id){
       //
    }
    
    public static function delete($id){
       //
    }
}