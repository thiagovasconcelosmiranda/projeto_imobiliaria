<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\ContatoProprietarioHeandler;
use \src\handlers\ContatoInquilinoHandler;
use \src\handlers\ContratoBeneficioHandler;
use \src\handlers\ContratoFiadorHandler;

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
        $array = [];
        $info = filter_input(INPUT_GET, 'contract');
        $info = explode('-', $info);

        if (empty($info[0])) {
            $info[0] = '';
        }

        if (empty($info[1])) {
            $info[1] = '';
        }

        switch ($info[0]) {
            case 'proprietario':
                $array[] = ContatoProprietarioHeandler::findById($this->infoUser->id);
                break;
            case 'inquilino':
                $array[] = ContatoInquilinoHandler::findById($this->infoUser->id);
                break;
            case 'favorecido':
                $array[] = ContratoBeneficioHandler::findById($this->infoUser->id);
                break;
            case 'fiador':
                $array[] = ContratoFiadorHandler::findById($this->infoUser->id);
                break;
        }

        $this->render('ksi/contract', [
            'infoUser' => $this->infoUser,
            'title' => $info[0],
            'descrition' => $info[1],
            'contratos' => $array
        ]);
    }
}