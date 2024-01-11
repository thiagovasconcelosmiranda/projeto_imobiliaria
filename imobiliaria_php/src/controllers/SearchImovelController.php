<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\FavoritoHandler;
use \src\handlers\ImovelHandler;

class SearchImovelController extends Controller
{
  public function findName()
  {
    $favorites = FavoritoHandler::findByAll();
    $imoveis = [];
    $array = [];
    $num = 1;
    $activeLink = 'buscar';

    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $numeric = (int) $data['ref'];
    $list = str_split($numeric);

    if (is_numeric($numeric) && count($list) === 4) {
      $num++;

      $listImovel = ImovelHandler::findRef($numeric);
      $imoveis[$num] = $listImovel;
      
      foreach ($imoveis[$num] as $key => $value) {
        $array[] = $value;
      }
    } else {
      
      if (isset($data)) {
        
        foreach ($data as $key => $value) {
          $k = explode('/', $key);
          $num++;
         
          $listImovel = ImovelHandler::findAllName($k[0], $value);
          $imoveis[$num] = $listImovel;

          foreach ($imoveis[$num] as $key => $value) {
            $array[] = $value;
          }
        }
      } else {
        $this->redirect('/');
      }
    }
   
   
    $this->render('searchImovel', [
      'imoveis' => $array,
      'activeLink' => $activeLink,
      'favoriets' => $favorites
    ]);

  }
}