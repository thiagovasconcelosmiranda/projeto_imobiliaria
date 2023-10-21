<?php
namespace src\controllers;
use \core\Controller;
use \src\handlers\ImovelHandler;

class DetalheImovelController extends Controller {

    public function find() {
      $flash = '';
       $activeLink = 'detalhes';
        $id = filter_input(INPUT_GET, 'id');
        if(!empty($_SESSION['flash'])){
           $flash = $_SESSION['flash'];
           $_SESSION['flash'] = '';
        }
        if($id){
          $imovel =ImovelHandler::findId($id);
      
          foreach($imovel as $item){
            $this->render('detalheImovel', [
              'imovel' => $item,
              'id' => $id, 
              'flash' => $flash,
              'activeLink' => $activeLink
           ]);
          }
          
        }
    }

    public function addSchedute(){
       $id = filter_input(INPUT_POST, 'id');
       $name = filter_input(INPUT_POST,'nome');
       $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
       $option = filter_input(INPUT_POST,'option');
       $cel = filter_input(INPUT_POST,'cel');
       $date = filter_input(INPUT_POST,'date');
       $time = filter_input(INPUT_POST,'time');//
       $contract = filter_input(INPUT_POST,'contract');

       if( $id && $name && $email  && $option && $cel && $date && $time && $contract){
           $_SESSION['flash'] = 'Adicionado com sucesso';
           echo 'aceito';
       } 
       $this->redirect('/detalhe-imovel?id='.$id);
       exit;
      
    }
}