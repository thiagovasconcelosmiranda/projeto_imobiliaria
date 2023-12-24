<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Aluguel;

class AluguelHandler extends Controller
{
    public static function findByAll()
    {
        $aluguels = Aluguel::select()
            ->execute();

        return $aluguels;
    }
}