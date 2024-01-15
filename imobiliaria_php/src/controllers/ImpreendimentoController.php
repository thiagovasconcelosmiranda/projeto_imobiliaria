<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\FavoritoHandler;
use \src\handlers\ImovelHandler;

class ImpreendimentoController extends Controller
{

  public function index()
  {
   $favorites = FavoritoHandler::findByAll();
    $about = "flex";
    $activeLink = 'impreendimentos';

    $this->render('impreendimento', [
      'aboutFlex' => $about,
      'activeLink' => $activeLink,
      'favorites' => $favorites
    ]);
  }

  public function search()
  {
    $array = ['error' => ''];
    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    if ($data) {
      foreach ($data as $value) {
        $v = explode('=', $value);
        $imoveis = ImovelHandler::searchEnterprise($v[0], $v[1]);
        if($imoveis){
          $array[] = $imoveis;
        }else{
          $array['error'] = 'Nenhum imóvel encontrado';
        }
      }

    } else {
      $imoveis = ImovelHandler::searchAll();
      $array[] = $imoveis;
    }

    header('Content: application/json');
    echo json_encode($array);
    exit;
  }

}