<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\AtividadeHandler;

class ksiActivitiesController extends Controller
{

    public function index()
    {   $id = filter_input(INPUT_GET, 'id');

        $this->render('ksi/adm/add-activities',[
            'id' => $id
        ]);
    }

    function create(){
        $inputs = filter_input_array(INPUT_POST);
        if(count($inputs) === 6){
            if(AtividadeHandler::create($inputs)){
              $_SESSION['flash-msg'] = "Adicionado com sucesso";
              $this->redirect('/ksi/adm/area-adm');
              exit;
            }

        }
    }

}