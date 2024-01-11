<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\AnuncioHandler;
use src\handlers\FavoritoHandler;

class AnuncioController extends Controller
{

    public function index()
    {
        $favorites = FavoritoHandler::findByAll();

        $flash = "";
        $activeLink = 'anuncio';
        if (!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = "";
        }

        $aboutFlex = "flex";
        $this->render('anuncio', [
            'aboutFlex' => $aboutFlex,
            'flash' => $flash,
            'activeLink' => $activeLink,
            'favorites' => $favorites
        ]);

    }

    public function add()
    {
        $input = filter_input_array(INPUT_POST);
        $dados = AnuncioHandler::create($input);

        if ($dados) {
            $_SESSION['flash'] = 'Enviado com sucesso!';
        }
        $this->redirect('/anuncio');
        exit;
    }
}