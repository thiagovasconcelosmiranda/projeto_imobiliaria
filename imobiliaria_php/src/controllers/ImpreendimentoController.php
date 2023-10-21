<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\ImovelHandler;

class ImpreendimentoController extends Controller {

    public function index() {
        $about = "flex";
        $activeLink = 'impreendimentos';
        
        $this->render('impreendimento', [
          'aboutFlex'=>$about,
          'activeLink' => $activeLink
        ]);
    }

    public function search() {
         $array = [];
         $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);  
           
         if($data){
          foreach ($data as $value) {        
            $v = explode('=', $value);
      
             switch($v[0]){
               case 'cidade':
                 $imoveis = ImovelHandler::enterprise($v[0], $v[1], 'ends.');
                 $array[] = $imoveis;
               break;
               
               case 'tipo':
                $imoveis = ImovelHandler::enterprise($v[0], $v[1], 'imovels.');
                $array[] = $imoveis;
               break;

                /* 
               case 'construtora':
                  $imoveis = ImovelHandler::enterprise($v[0], $v[1], 'imovels.');
                  $array[] = $imoveis;
               break;

              case 'status':
                $imoveis = ImovelHandler::enterprise($v[0], $v[1], 'imovels.');
                $array[] = $imoveis;
              break;
              */
            } 
          }

         }else{
           $imoveis = ImovelHandler::searchAll();
           $array[] = $imoveis;
         }
      
        header('Content: application/json');
        echo json_encode($array);
        exit;
  }

}