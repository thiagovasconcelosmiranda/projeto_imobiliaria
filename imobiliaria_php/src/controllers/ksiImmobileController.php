<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\AtividadeHandler;
use \src\handlers\DocumentHandler;

class ksiImmobileController extends Controller
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
        $immobile = new PagImovelController();
        $infImmobile = $immobile->findIdImovel($this->infoUser->id);
       
        $documentos = DocumentHandler::findByLoginId($this->infoUser->id);

        $atividades = AtividadeHandler::findByLoginId($this->infoUser->id);
      
        $this->render('ksi/immobile', [
            'infImmobile'=> $infImmobile,
             'documentos' => $documentos,
             'atividades' => $atividades
        ]);
    }

}