<?php
namespace src\handlers;

use \core\Controller;

use \src\models\Document;

class DocumentHandler extends Controller{
 public static function findByImovelId($imovel_id){
     $document = Document::select()
     ->where('imovel_id', $imovel_id)
     ->execute();

    return $document;
 }

 public static function create($array){
    $date = date('Y/m/d H:m:s');
    Document::insert([
      'categoria' => $array['categoria'],
      'tamanho' => $array['tamanho'],
      'descricao' => $array['descricao'],
      'download' => $array['document'],
      'imovel_id' => $array['imovel_id'],
      'update_at' => $date,
      'created_at' => $date,
    ])
    ->execute();
    return true;
 }
}
