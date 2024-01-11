<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\FavoritoHandler;
use \src\handlers\LoginHandler;
use \src\handlers\ImovelHandler;

class KsiFavoriteController extends Controller
{
    private $infUser;

    public function __construct()
    {
        if ($user = LoginHandler::checkLogin()) {
                $this->infUser = $user;
        }else{
            $_SESSION['flash-i'] = 'Faça o login';
        }
    }

    public function index()
    {
        $this->render('/ksi/favorite');
    }

    public function verifyFavorite($atts)
    {
        $data = [];
        $id = $atts['id'];
        
        if (!empty($this->infUser)) {
            $imovel = ImovelHandler::findId($id);
            $idFavorite = FavoritoHandler::findById($this->infUser->id, $imovel['id']);
           
            if($idFavorite){
              FavoritoHandler::delete($idFavorite);
              $data['status'] = 'off';
            }else{
                FavoritoHandler::create($imovel, $this->infUser->id);
                $data['status'] = 'on';
            }
        }else{
            $data['error'] = 'Faça o login';
        }

        header('Content: application/json');
        echo json_encode($data);
    }
}


