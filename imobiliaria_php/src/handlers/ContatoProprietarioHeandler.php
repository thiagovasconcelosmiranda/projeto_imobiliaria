<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Contrato_proprietario;


class ContatoProprietarioHeandler extends Controller
{
   public static function findId($id, $descrition)
   {
      if($descrition == 'proprietario'){
         $contratos = Contrato_proprietario::select()
         ->where("login_id", $id)
         ->execute();

         return $contratos;
      }
      
   }

}