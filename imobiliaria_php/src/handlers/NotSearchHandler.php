<?php
namespace src\handlers;

use \core\Controller;
use \src\models\NotSearch;

class NotSearchHandler extends Controller
{
  public static function add($input)
  {

    $notSearch = NotSearch::insert([
      'nome' => $input['nome'],
      'cidade' => $input['cidade'],
      'email' => $input['email'],
      'telefone' => $input['telefone'],
      'descricao' => $input['descricao'],
      'operacao' => $input['operacao'],
      'residencial' => $input['residencial'],
      'comercial' => $input['comercial'],
      'cidade1' => $input['cidade1'],
      'cidade2' => $input['cidade2'],
      'cidade3' => $input['cidade3'],
      'cidade4' => $input['cidade4'],
      'cidade5' => $input['cidade5'],
      'cidade6' => $input['cidade6'],
      'cidade7' => $input['cidade7'],
      'cidade8' => $input['cidade8'],
      'cidade9' => $input['cidade9'],
      'cidade10' => $input['cidade10'],
      'cidade11' => $input['cidade11'],
      'cidade12' => $input['cidade12'],
      'cidade13' => $input['cidade13'],
      'cidade14' => $input['cidade14'],
      'valor' => $input['valor'],
      'garagem' => $input['garagem'],
      'quarto' => $input['quarto'],
      'update_at' => date("Y-m-d H:i:s"),
      'created_at' => date("Y-m-d H:i:s")
    ])->execute();

    return true;


  }
}