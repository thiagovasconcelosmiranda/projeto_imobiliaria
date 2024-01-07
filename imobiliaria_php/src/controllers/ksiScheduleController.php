<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\VisitaHandler;

class ksiScheduleController extends Controller
{

    public function index()
    {
       $visiatas = VisitaHandler::findByAll();

        $this->render('ksi/adm/schedule',['visitas'=>$visiatas]);
    }

    
    public function delete($atts)
    {
        $id = $atts['id'];
        if($id){
           if(VendaHandler::delete($id)){
              $_SESSION['flash-msg'] = "deletado com sucesso";
              $this->redirect('/ksi/adm-panel');
              exit;
           }
        }
    }

}