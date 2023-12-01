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
}