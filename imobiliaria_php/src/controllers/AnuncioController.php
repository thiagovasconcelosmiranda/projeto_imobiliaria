<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\AnuncioHandler;

class AnuncioController extends Controller {

    public function index() {
        $msg="";
        if(!empty($_SESSION['msg'])){
           $msg = $_SESSION['msg'];
           $_SESSION['msg'] = "";
        }

        $aboutFlex = "flex";
        $this->render('anuncio', [
            'aboutFlex' => $aboutFlex,
            'msg'=> $msg
        ]);
       
    }

    public function add(){
      

        $input = filter_input_array(INPUT_POST);
       
        $dados = AnuncioHandler::create($input);
      
          if($dados){
          $_SESSION['msg'] = 'Enviado com sucesso!';
          $this->redirect('/anuncio');
         
          exit;
      }
         
    }

}