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
}