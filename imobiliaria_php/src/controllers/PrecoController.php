<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\Imovelhandler;

class PrecoController extends Controller {

    public function index() {
       
       $array=['error'=>''];
       $type = filter_input(INPUT_GET, 'type');
       
       if($type){
          switch($type){
            case 'Preço da vendas':
              $array[] =  ImovelHandler::saleAll();
            break;
            case 'Preço de aluguels':
              $array[] =  ImovelHandler::rentAll();
            break;
          }
      
       }else{
         $array['error'] = 'type vazio';
       }

       header('Content: application/json');
       echo json_encode($array);
       exit;
    }

}