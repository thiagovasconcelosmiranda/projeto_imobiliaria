<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\ContatoProprietarioHeandler;

class KsiContractController extends Controller
{
    private $infoUser;
    public function __construct()
    {
        $this->infoUser = LoginHandler::checkLogin();
        if (!$this->infoUser) {
            $this->redirect("/");
        }
    }

    public function index()
    {
        $inf = filter_input(INPUT_GET, 'contract');
        $inf = explode('-', $inf);

        if (empty($inf[1])) {
            $inf[1] = '';
        }

        $contratos = ContatoProprietarioHeandler::findId($this->infoUser->id, $inf[1]);
       
        $this->render('ksi/contract', [
            'infoUser' => $this->infoUser,
            'title' => $inf[0],
            'descrition' => $inf[1],
            'contratos' => $contratos
        ]);
    }

}