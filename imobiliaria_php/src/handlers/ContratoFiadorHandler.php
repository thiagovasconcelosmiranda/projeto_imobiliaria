<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Contrato_fiador;


class ContratoFiadorHandler extends Controller
{
   public static function findById($id)
   {
        $info = Contrato_fiador::select()
        ->where("login_id", $id)
        ->execute();

        return $info;
   }
}