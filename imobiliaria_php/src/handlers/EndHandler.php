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
}