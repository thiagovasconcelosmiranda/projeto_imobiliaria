<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Construtora;

class ConstrutoraHandler extends Controller {

   public static function findByAll(){
     $data = Construtora::select()->execute();
     return $data;
   }
   public static function findById($id){
    $data = Construtora::select()
    ->where('id', $id)
    ->execute();
    return $data;
  }
}

