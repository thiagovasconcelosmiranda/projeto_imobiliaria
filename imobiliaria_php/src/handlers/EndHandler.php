<?php
namespace src\handlers;

use \core\Controller;
use \src\models\End;


class EndHandler extends Controller
{

   public static function create($id, $array){
    $date =  date('Y/m/d H:m:s');
       End::insert([
        'id' => $id,
         'cep' =>$array['cep'],
         'end' => $array['end'],
         'num' => $array['num'],
         'regiao' => $array['regiao'],
         'bairro' => $array['bairro'],
         'cidade' => $array['cidade'],
         'uf' => $array['uf'],
         'imovel_id' => $id,
         'update_at' => $date,
         'create_at' => $date
       ])->execute();

       return true;
   }

   public static function update($id, $end){
    End::update([
      'cep' => $end['cep'],
      'end' => $end['end'],
      'num' => $end['num'],
      'regiao' => $end ['regiao'],
      'bairro' => $end['bairro'],
      'cidade' => $end['cidade'],
      'uf' => $end['uf'],
      'imovel_id' => $id,
      'update_at' => date('Y/m/d H:m:s'),
    ])
    ->where('id', $id)
    ->execute();

    return true;
}
}