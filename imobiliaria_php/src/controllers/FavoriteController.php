<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\FavoritoHandler;
use \src\handlers\LoginHandler;
use \src\handlers\ImovelHandler;

class FavoriteController extends Controller
{

  public function index()
  {
    $about = "flex";
    $activeLink = 'favorite';
    $favorites = FavoritoHandler::findByAll();

    $this->render('/favorite', [
      'aboutFlex' => $about,
      'activeLink' => $activeLink,
      'favorites' => $favorites
    ]);
  }

  public function verifyFavorite($atts)
  {
    $id = $atts['id'];
    $pag = filter_input(INPUT_GET, 'pag');
    if ($id) {
      $imovel = ImovelHandler::findId($id);
      print_r($imovel);
      if (FavoritoHandler::findByImmobile($id)) {
        FavoritoHandler::delete($imovel);
      } else {
        echo "Não tem os dados";
        FavoritoHandler::create($imovel);
      }
      if ($pag == 'home') {
        $this->redirect('/');
      } else {
        $this->redirect('/detalhe-imovel?id=' . $id);
        exit;
      }
    }
  }
}


