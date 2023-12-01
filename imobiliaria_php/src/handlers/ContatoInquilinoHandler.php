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
}