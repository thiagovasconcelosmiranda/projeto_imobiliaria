<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Contrato_inquilino;


class ContatoInquilinoHandler extends Controller
{
   public static function findById($id)
   {
       $info = Contrato_inquilino::select()
      ->where("login_id", $id)
       ->execute();

       return $info;
   }

   public static function create($login_id, $arquivo){
    $date = date('Y/m/d H:m:s');

     Contrato_inquilino::insert([
        'login_id' =>$login_id,
        'arquivo' => $arquivo,
        'created_at' => $date,
        'update_at' => $date
     ])
     ->execute();

     return true;
   }
}