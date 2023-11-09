<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\AnuncioHandler;

class AnuncioController extends Controller
{

    public function index()
    {
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
            'activeLink' => $activeLink
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