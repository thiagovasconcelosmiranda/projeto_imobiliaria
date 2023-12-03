<?php
namespace src\handlers;

use \core\Controller;

use \src\models\Document;

class DocumentHandler extends Controller{
 public static function findByLoginId($login_id){
     $documentos = Document::select()
     ->where("imovel_id", $login_id)
     ->execute();

    return $documentos;
 }
}
