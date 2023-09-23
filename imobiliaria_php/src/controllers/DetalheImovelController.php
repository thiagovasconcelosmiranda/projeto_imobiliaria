<?php
namespace src\controllers;
use \core\Controller;
use \src\handlers\ImovelHandler;

class DetalheImovelController extends Controller {

    public function find() {
        $id = filter_input(INPUT_GET, 'id');
        if($id){
          $imovel =ImovelHandler::findId($id);
          foreach($imovel as $item){
            $this->render('detalheImovel', [
              'imovel' => $item
           ]);
          }
        }
    }
}