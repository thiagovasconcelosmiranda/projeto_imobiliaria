<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\ImovelHandler;
use \src\handlers\VisitaHandler;


class DetalheImovelController extends Controller
{

  public function find()
  {
    $flash = '';
    $activeLink = 'detalhes';
    $id = filter_input(INPUT_GET, 'id');
    if (!empty($_SESSION['flash'])) {
      $flash = $_SESSION['flash'];
      $_SESSION['flash'] = '';
    }
    if (!$id) {
      $this->redirect('/');
      exit;
    }
      $imovel = ImovelHandler::findId($id);

      $this->render('detalheImovel', [
        'imovel' => $imovel,
        'id' => $id,
        'flash' => $flash,
        'activeLink' => $activeLink
      ]);  
  }

  public function addSchedule()
  {
     $inputs = filter_input_array(INPUT_POST);
     
    if (count($inputs) === 8) {
      if(VisitaHandler::create($inputs)){
        $_SESSION['flash'] = 'Adicionado com sucesso';
        $this->redirect('/detalhe-imovel?id=' . $inputs['id']);
         exit;
      }
      

    }
   

  }

 public  function listSchedule(){
//Criar
 }
}