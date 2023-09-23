<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\Imovelhandler;
use \src\models\Imovel;

class PagImovelController extends Controller {
    private $limit = 3;

    public function apartamento() {
        $data = [];
        $apt = filter_input(INPUT_GET, 'apartamento'); 
        $pagAll = ImovelHandler::findCount('apartamento');
        $pageCount = ceil($pagAll /$this->limit);
        
        $imoveis = ImovelHandler::findType('apartamento', $apt, $this->limit);

        $data[] = $imoveis;
        $data[] = $pageCount;
        echo json_encode($data);
    }

    public function casa() {
       $data = [];
       $casa = filter_input(INPUT_GET, 'casa'); 
       $pagAll = ImovelHandler::findCount('casa');
       $pageCount = ceil($pagAll /$this->limit);
  
       $imoveis = ImovelHandler::findType('casa', $casa, $this->limit);
      
       $data[] = $imoveis;
       $data[] = $pageCount;
       $data[] = $casa;
       echo json_encode($data);
  }

  public function destaque(){
     $data = [];
     $destaque = filter_input(INPUT_GET, 'destaque'); 
     $pagAll = ImovelHandler::findAllCount();
     $pageCount = ceil($pagAll /$this->limit);

    if(!$destaque){
      $destaque = 0;
    }

    $imoveis =  ImovelHandler::findAll($destaque ,$this->limit);
  
    $data[] = $imoveis;
    $data[] = $pageCount;
    echo json_encode($data);
  }
}