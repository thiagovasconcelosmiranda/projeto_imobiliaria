<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\VisitaHandler;

class ksiScheduleController extends Controller
{

    public function index()
    {
        $visiatas = VisitaHandler::findByAll();
        $this->render('ksi/adm/schedule', ['visitas' => $visiatas]);
    }

    public function getVisit()
    {
        $data = ['error' => ''];
        $name = filter_input(INPUT_GET, 'name');

        if ($name) {
            $data[] = VisitaHandler::findByName($name);
        } else {
            $data[] = VisitaHandler::findByAll();
        }

        header('Content: application/json');
        echo json_encode($data);
    }


    public function delete($atts)
    {
        $data = [];
        $id = $atts['id'];
        if ($id) {
            if (VisitaHandler::delete($id)) {
                 $data['status'] = $_SESSION['flash-msg'] = "deletado com sucesso";   
            }
        }
        header('Content: application/json');
        echo json_encode($data);
    }

}