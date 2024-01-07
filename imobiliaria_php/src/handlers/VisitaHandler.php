<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Visita;

class VisitaHandler extends Controller
{
  public static function findByAll()
  {
    $vendas = Visita::select()
      ->get();
    return $vendas;
  }

  public static function create($array)
  {
    $date = date('Y/m/d H:m:s');
    Visita::insert([
      'name' => $array['nome'],
      'opcao' => $array['option'],
      'email' => $array['email'],
      'date' => $array['date'],
      'time' => $array['time'],
      'contrato_politica' => $array['contract'],
      'create_at' => $date,
      'update_at' => $date,
    ])
      ->execute();
    return true;
  }

 
}