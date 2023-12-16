<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\AnuncioHandler;


class ksiAnnouncementController extends Controller
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
        $this->render('ksi/adm/announcement');
    }

    public function searchAnnouncement()
    {
        $array = [];
        $search = filter_input(INPUT_GET, 'search');

        if (strlen($search) > 1) {
            $array[] = AnuncioHandler::search($search);

        } else {
            $array[] = AnuncioHandler::findByAll();
        }

        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($array);
    }

    public function remove($att)
    {
        $array = ["error" => ""];
        $id = $att['id'];

        if ($id) {
            if (!AnuncioHandler::remove($id)) {
                $array["error"] = "Não deletado";
            }
        }

        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($array);

    }

}