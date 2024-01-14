<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\AluguelHandler;
use src\handlers\EndHandler;
use src\handlers\FotoHandler;
use \src\handlers\LoginHandler;
use \src\handlers\AtividadeHandler;
use \src\handlers\DocumentHandler;
use \src\handlers\ImovelHandler;
use src\handlers\VendaHandler;


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
        $listImmobile = ImovelHandler::ImmobileLoginId($this->infoUser->id);

        $this->render('ksi/immobile', [
            'listImmobile' => $listImmobile,
        ]);
    }
    public function search()
    {
        $array = [];

        $search = filter_input(INPUT_GET, 'search');

        if ($search) {
            $array[] = ImovelHandler::search($search);
        } else {
            $array[] = ImovelHandler::searchAll();
        }

        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($array);
    }

    public function remove($att)
    {
        $id = $att['id'];
    }


    public function create()
    {
        $photos = [];
        $inputs = filter_input_array(INPUT_POST);
        $inputs['ref'] = rand(9, 9999);
        if (count($inputs) == 27) {
            if (ImovelHandler::create($inputs)) {
                $id_immobile = ImovelHandler::lastId();
                if (EndHandler::create($id_immobile['id'], $inputs)) {
                    foreach ($_FILES as $key => $photo) {
                        if (isset($_FILES[$key]) && !empty($_FILES[$key]['tmp_name'])) {
                            $newPhoto = $_FILES[$key];
                            if (in_array($newPhoto['type'], ['image/jpg', 'image/jpeg', 'image/png'])) {
                                $ext = strtolower(substr($newPhoto['name'], -4));
                                $new_name = md5(time() . rand(1, 9999)) . $ext;

                                $photos[$key] = $new_name;

                                $dir = "assets/media/photos_immobile/" . $id_immobile['id'];
                                if (is_dir($dir)) {
                                    move_uploaded_file($newPhoto['tmp_name'], $dir . '/' . $new_name);
                                } else {
                                    mkdir($dir, 0700);
                                    if (is_dir($dir)) {
                                        move_uploaded_file($newPhoto['tmp_name'], $dir . '/' . $new_name);
                                    }
                                }

                            }
                        }
                    }

                    if (FotoHandler::create($id_immobile['id'], $photos)) {
                        $_SESSION['flash-msg'] = "Adicionado com sucesso!";
                        $this->redirect('/ksi/adm/area-adm');
                        exit;
                    } else {
                        $_SESSION['flash-msg'] = "Erro ao Adicionar";
                        $this->redirect('/ksi/adm/area-adm');
                        exit;
                    }
                }
            }
        }
    }
    public function getImmobile()
    {
        $id = filter_input(INPUT_GET, 'id');
        $title = "Adicionar imóvel";
        $url = "ksi/adm/add-immobile";

        if ($id) {
            $title = "Alterar Imóvel";
            $url = "ksi/adm/alter-immobile/" . $id;
        }
        $vendas = VendaHandler::findByAll();
        $alugueis = AluguelHandler::findByAll();
        $imoveis = ImovelHandler::findId($id);
        $users = LoginHandler::findAll();

        $this->render('/ksi/adm/add-immobile', [
            'title' => $title,
            'url' => $url,
            'users' => $users,
            'imoveis' => $imoveis,
            'vendas' => $vendas,
            'alugueis' => $alugueis
        ]);
    }

    public function ViewImmobile()
    {
        $id = filter_input(INPUT_GET, 'id');
        $listImmobile = ImovelHandler::findId($id);

        $this->render('/ksi/adm/view-immobile', [
            'listImmobile' => $listImmobile
        ]);
    }


    public function update($atts)
    {
        $id = $atts['id'];
        $photos = [];
        $inputs = filter_input_array(INPUT_POST);

        if (count($inputs) === 25 && $id) {
            if (ImovelHandler::update($id, $inputs)) {
                if (EndHandler::update($id, $inputs)) {
                    foreach ($_FILES as $key => $photo) {

                        if ($_FILES[$key]['type'] != "") {
                            if (isset($_FILES[$key]) && !empty($_FILES[$key]['tmp_name'])) {
                                $newPhoto = $_FILES[$key];

                                if (in_array($newPhoto['type'], ['image/jpg', 'image/jpeg', 'image/png'])) {
                                    $ext = strtolower(substr($newPhoto['name'], -4));
                                    $new_name = md5(time() . rand(1, 9999)) . $ext;

                                    $photos[$key] = $new_name;

                                    $dir = "assets/media/photos_immobile/" . $id;

                                    if (is_dir($dir)) {
                                        $foto = FotoHandler::findById($id);

                                        $file = $dir . '/' . $foto[$key];

                                        if (file_exists($file)) {
                                            unlink($file);
                                        }

                                        move_uploaded_file($newPhoto['tmp_name'], $dir . '/' . $new_name);
                                    } else {
                                        mkdir($dir, 0700);
                                        if (is_dir($dir)) {
                                            move_uploaded_file($newPhoto['tmp_name'], $dir . '/' . $new_name);
                                        }
                                    }
                                }
                                FotoHandler::update($id, $key, $photos);
                            }
                        }

                    }

                }
            }
            $_SESSION['flash-msg'] = "Alterado com sucesso!";
            $this->redirect('/ksi/adm/area-adm');
            exit;
        }
    }



}