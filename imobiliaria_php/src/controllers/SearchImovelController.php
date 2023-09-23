<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\ImovelHandler;

class SearchImovelController extends Controller {

    public function findName() {
      $imoveis=[];
        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);       
        if(isset($data)){
            $imoveis = ImovelHandler::findAllName($data);
        }else{
          $this->redirect('/');
        }
       
        $this->render('searchImovel', [
          'imoveis'=> $imoveis
        ]);
    }
}