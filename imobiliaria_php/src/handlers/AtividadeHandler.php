<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Atividade;

class AtividadeHandler extends Controller
{
  public static function findByImovelId($imovel_id){
    $atividades= Atividade::select()
    ->where("imovel_id", $imovel_id)
    ->execute();
    
   return $atividades;
  }

  public static function create($array){
    $date = date('Y/m/d H:m:s');
     Atividade::insert([
      'time' => $array['time'],
      'date' => $array['date'],
      'atendente' => $array['atendente'],
      'setor' => $array['setor'],
      'descricao' => $array['descricao'],
      'imovel_id' => $array['imovel_id'],
      'created_at' => $date,
      'updated_at' => $date,

     ])
     ->execute();
     return true;
  }
}