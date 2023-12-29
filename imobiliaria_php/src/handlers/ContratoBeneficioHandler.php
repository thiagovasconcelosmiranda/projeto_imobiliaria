<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Contrato_beneficio;


class ContratoBeneficioHandler extends Controller
{
   public static function findById($id)
   {
      $info = Contrato_beneficio::select()
        ->where("login_id", $id)
        ->execute();

        return $info;
   }

  private static function lastId(){
   $id = Contrato_beneficio::select('id')
    ->orderBy(['id' => 'desc'])
    ->one();
    return $id;
  }

   public static function create($login_id, $arquivo){
       Contrato_beneficio::insert([
         'login_id' =>$login_id,
         'arquivo' =>$arquivo,
         'created_at' => date('Y/m/d H:m:s'),
         'update_at' => date('Y/m/d H:m:s')
       ])
       ->execute();

       $id = self::lastId();
       return $id;
   }
}