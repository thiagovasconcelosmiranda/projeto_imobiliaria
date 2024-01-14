<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\FavoritoHandler;
use \src\handlers\LoginHandler;
use \src\handlers\WorkHandler;

class ksiWorkController extends Controller
{

    public function __construct(){
        if(!LoginHandler::checkLogin()){
             $this->redirect('/');
             exit;
        }
    }

    public function index()
    { 
        $works = WorkHandler::findAll();

        $this->render('ksi/adm/work-list', [
            'works' => $works,
        ]);
    }

    public function view(){
        $id = filter_input(INPUT_GET, 'id');
        if($id){

            $work = WorkHandler::findById($id);

             $this->render('/ksi/adm/view-work', [
                'work' => $work
             ]);
        }
    }

    public function delete($atts)
    {

        $id = $atts['id'];

        if ($id) {
            $work = WorkHandler::findByImage($id);
            
            if ($work['arquivo']) {
                $dir = "assets/media/works/" . $id;

                if (is_dir($dir)) {
                    unlink($dir . '/' . $work['arquivo']);
                    rmdir($dir);

                    if (WorkHandler::delete($id)) {
                        $_SESSION['flash-msg'] = "Deletado com sucesso";
                        $this->redirect('/ksi/adm/area-adm');
                        exit;
                    }
                }
            }
        }
    }
}