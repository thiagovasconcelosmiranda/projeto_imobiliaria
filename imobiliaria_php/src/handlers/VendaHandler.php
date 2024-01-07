<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Venda;

class VendaHandler extends Controller
{
    public static function findByAll()
    {
        $vendas = Venda::select()
            ->execute();

        return $vendas;
    }

    public static function delete($id)
    {
      Venda::delete()
        ->where('id', $id)
        ->execute();
  
      return true;
    }
}