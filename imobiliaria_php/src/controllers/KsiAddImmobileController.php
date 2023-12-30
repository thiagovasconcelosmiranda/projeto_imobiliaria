<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\AluguelHandler;
use \src\handlers\VendaHandler;
use \src\handlers\ImovelHandler;
use \src\handlers\EndHandler;
use \src\handlers\FotoHandler;



class KsiAddImmobileController extends Controller
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
        $title = "Adicionar novo Imóvel";
        $url = "ksi/adm/add-immobile";
        $id = filter_input(INPUT_GET, 'id');
        $imoveis = [];
       
         if($id){
            $imoveis[] =  ImovelHandler::findId($id);
            $title = "Alterar Imóvel";
            $url = "ksi/adm/alter-immobile/".$id;
         }

        $users = LoginHandler::findAll();
        $alugueis = AluguelHandler::findByAll();
        $vendas = VendaHandler::findByAll();

        $this->render('ksi/adm/add-immobile', [
            'title' => $title,
            'users' => $users,
            'alugueis' => $alugueis,
            'vendas' => $vendas,
            'imoveis' => $imoveis,
            'url' => $url
        ]);
    }

    public function create()
    {
        $inputs = filter_input_array(INPUT_POST);
        $inputs['ref'] = rand(9,9999);
       
        if ($lastId = ImovelHandler::create($inputs)) {
            $inputs['imovel_id'] = $lastId['id'];
            $inputs['id'] = $lastId['id'];
            if (EndHandler::create($inputs)) {
                foreach ($_FILES as $key => $photo) {
                    if (isset($_FILES[$key]) && !empty($_FILES[$key]['tmp_name'])) {
                        $newPhoto = $_FILES[$key];
                        if (in_array($newPhoto['type'], ['image/jpg', 'image/jpeg', 'image/png'])) {
                            $photoWidth = 1024;
                            $photoHeight = 678;

                            list($widthOrig, $heightOrig) = getimagesize($newPhoto['tmp_name']);
                            $ratio = $widthOrig / $heightOrig;

                            $newWidth = $photoWidth;
                            $newHeight = $newWidth / $ratio;

                            if ($newHeight < $photoHeight) {
                                $newHeight = $photoHeight;
                                $newWidth = $newHeight * $ratio;
                            }
                            $x = $photoWidth - $newWidth;
                            $y = $photoHeight - $newHeight;

                            $x = $x < 0 ? $x / 2 : $x;
                            $y = $y < 0 ? $y / 2 : $y;

                            $finalImage = imagecreatetruecolor($photoWidth, $photoHeight);

                            switch ($newPhoto['type']) {
                                case 'image/jpeg':
                                    $image = imagecreatefromjpeg($newPhoto['tmp_name']);
                                    break;
                                case 'image/png';
                                    $image = imagecreatefrompng($newPhoto['tmp_name']);
                                    break;
                            }

                            $photoFinal = md5(time() . rand(1, 9999)) . ".jpg";
                            $inputs[$key] = $photoFinal;

                            imagecopyresampled(
                                $finalImage, $image,
                                $x, $y, 0, 0,
                                $newWidth, $newHeight, $widthOrig, $heightOrig
                            );

                            $lastId = ImovelHandler::lastId();

                            $dir = './assets/images/' . $lastId['id'];
                            if (is_dir($dir)) {
                                imagejpeg($finalImage, $dir . '/' . $photoFinal, 100);
                            } else {
                                mkdir($dir . '/', 0777, true);
                                imagejpeg($finalImage, $dir . '/' . $photoFinal, 100);
                            }
                        }
                    }
                }
                
                if (FotoHandler::create($inputs)) {
                    $_SESSION['flash-msg'] = 'Adicionado com sucesso!';
                    $this->redirect('/ksi/adm/area-adm');
                    exit;
                } else {
                    $_SESSION['flash-msg'] = 'Dados não adicionado!';
                    $this->redirect('/ksi/adm/area-adm');
                    exit;
                }
            }
        }
    }

    public function update($atts){

    }
}