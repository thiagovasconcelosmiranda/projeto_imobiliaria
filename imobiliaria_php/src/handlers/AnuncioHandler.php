<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Anuncio;

class AnuncioHandler extends Controller {

   public static function create($input){

      $date = date('d-m-Y  H:i:s');
      
      Anuncio::insert([
         'name' => $input['name'],
         'email' => $input['email'],
         'telefone' => $input['telefone'],
         'celular' => $input['celular'],
         'preferencia' => $input['preferencia'],
         'tipo_imovel' => $input['tipo_imovel'],
         'cep' => $input['cep'],
         'end' => $input['end'],
         'num' => $input['num'],
         'bairro' => $input['bairro'],
         'cidade' => $input['cidade'],
         'estado' => $input['estado'],
         'update_at' => $date,
         'created_at' => $date

      ])->execute();

      return true;
   }


}