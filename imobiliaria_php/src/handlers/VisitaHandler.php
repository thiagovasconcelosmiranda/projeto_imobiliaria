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

  public static function findByName($name)
  {
    $vendas = Visita::select()
    ->where('name','like', "%".$name.'%')
      ->get();
    return $vendas;
  }

  public static function create($array)
  {
    $date = date('Y/m/d H:m:s');
    Visita::insert([
      'name' => $array['nome'],
      'opcao' => $array['option'],
      'celular' => $array['cel'],
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

  public static function delete($id)
  {
       Visita::delete()
       ->where('id', $id)
       ->execute();

       return true;
  }
 
}