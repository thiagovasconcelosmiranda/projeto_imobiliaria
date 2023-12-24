<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Foto;


class FotoHandler extends Controller
{

   public static function create($array){


    
       Foto::insert([
         'foto1' => $array['foto1'],
         'foto2' => $array['foto2'],
         'foto3' => $array['foto3'],
         'foto4' => $array['foto4'],
         'foto5' => $array['foto5'],
         'imovel_id' => $array['imovel_id'],
         'update_at' => date('Y/m/d H:m:s'),
         'created_at' => date('Y/m/d H:m:s'),
       ])->execute();

       return true;
   }
}