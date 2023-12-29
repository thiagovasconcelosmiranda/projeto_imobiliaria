<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Contrato_proprietario;


class ContatoProprietarioHeandler extends Controller
{
   public static function findById($id)
   {
         $info = Contrato_proprietario::select()
         ->where("login_id", $id)
         ->execute();

         return $info; 
   }

   public static function create($login_id, $arquivo){
     $date = date('Y/m/d H:m:s');
     Contrato_proprietario::insert([
       'login_id' => $login_id,
       'arquivo' =>$arquivo,
       'created_at' => $date,
       'update_at' => $date
     ])
     ->execute();

     return true;
   }
}