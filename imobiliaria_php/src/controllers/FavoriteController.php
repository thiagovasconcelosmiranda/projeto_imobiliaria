<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\FavoritoHandler;
use \src\handlers\LoginHandler;
use \src\handlers\ImovelHandler;
use src\models\Imovel;

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

      if (FavoritoHandler::findByImmobile($id)) {
        FavoritoHandler::delete($imovel);
      } else {
        FavoritoHandler::create($imovel);
      }

      if ($pag == 'home') {
        $this->redirect('/');
        exit;
      } 
      if($pag == 'detalhe-imovel'){
         $this->redirect('/detalhe-imovel?id='.$id);
        exit;
      }
      if($pag == 'impreendimentos'){
        $this->redirect('/impreendimentos');
        exit;
      }
    }
  }
}


