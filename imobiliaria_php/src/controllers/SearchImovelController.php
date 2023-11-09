<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\ImovelHandler;

class SearchImovelController extends Controller
{
  public function findName()
  {
    $imoveis = [];
    $array = [];
    $num = 1;
    $activeLink = 'buscar';

    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (isset($data)) {
      foreach ($data as $key => $value) {
        $k = explode('/', $key);
        $num++;

        $ListImovel = ImovelHandler::findAllName($k[0], $value);
        $imoveis[$num] = $ListImovel;

        foreach ($imoveis[$num] as $key => $value) {
          $array[] = $value;
        }
      }

    } else {
      $this->redirect('/');
    }

    $this->render('searchImovel', [
      'imoveis' => $array,
      'activeLink' => $activeLink
    ]);

  }
}