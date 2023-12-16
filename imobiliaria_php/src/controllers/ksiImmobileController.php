<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\AtividadeHandler;
use \src\handlers\DocumentHandler;
use \src\handlers\ImovelHandler;

class ksiImmobileController extends Controller
{
    private $infoUser;
    public function __construct()
    {
        $this->infoUser = LoginHandler::checkLogin();
        if (!$this->infoUser) {
            //$this->redirect("/");
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

    public function search(){
         $array = [];

         $search = filter_input(INPUT_GET, 'search');

         if($search){
            $array[] = ImovelHandler::search($search);
         }else{
            $array[] = ImovelHandler::searchAll();
          }
            
         header('Access-Control-Allow-Origin: *');
         header('Content-Type: application/json');
         echo json_encode( $array);
    }

    public function remove($att){
       $id = $att['id'];
    }

}