<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Atividade;

class AtividadeHandler extends Controller
{
  public static function findByLoginId($login_id){
    $atividades= Atividade::select()
    ->where("imovel_id", $login_id)
    ->execute();
    
   return $atividades;
  }
}