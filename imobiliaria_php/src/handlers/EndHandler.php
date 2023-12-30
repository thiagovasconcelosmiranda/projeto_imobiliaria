<?php
namespace src\handlers;

use \core\Controller;
use \src\models\End;


class EndHandler extends Controller
{

   public static function create($array){
       End::insert([
         'id' => $array['id'],
         'cep' =>$array['cep'],
         'end' => $array['end'],
         'num' => $array['num'],
         'bairro' => $array['bairro'],
         'cidade' => $array['cidade'],
         'uf' => $array['uf'],
         'imovel_id' => $array['imovel_id'],
         'update_at' => date('Y/m/d H:m:s'),
         'create_at' => date('Y/m/d H:m:s')
       ])->execute();

       return true;
   }

   public static function update($id, $end){
    End::update([
      'cep' => $end['cep'],
      'end' => $end['end'],
      'num' => $end['num'],
      'bairro' => $end['bairro'],
      'cidade' => $end['cidade'],
      'uf' => $end['uf'],
      'imovel_id' => $end['imovel_id'],
      'update_at' => date('Y/m/d H:m:s'),
    ])
    ->where('id', $id)
    ->execute();

    return true;
}
}