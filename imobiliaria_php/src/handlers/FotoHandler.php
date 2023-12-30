<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Foto;


class FotoHandler extends Controller
{

  public static function findById($imovel_id){
     $fotos = Foto::select()
     ->where('imovel_id', $imovel_id)
     ->one();
     return  $fotos;
  }

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

   public static function update($login_id, $foto){
    Foto::update([
      'foto1' => $foto['foto1'],
      'foto2' => $foto['foto2'],
      'foto3' => $foto['foto3'],
      'foto4' => $foto['foto4'],
      'foto5' => $foto['foto5'],
      'update_at' => date('Y/m/d H:m:s'),
    ])
    ->where('imovel_id', $login_id)
    ->execute();

    return true;
   }
}