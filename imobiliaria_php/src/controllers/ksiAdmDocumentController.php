<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\DocumentHandler;


class KsiAdmDocumentController extends Controller
{

    public function index()
    {
        $imovel_id = filter_input(INPUT_GET, 'id');

        $this->render('ksi/adm/add-document', [
            'imovel_id' => $imovel_id
        ]);
    }

    public function create()
    {
        $inputs = filter_input_array(INPUT_POST);

        if (count($inputs) === 4) {
            if (isset($_FILES['document']) && !empty($_FILES['document']['tmp_name'])) {
                $newDocument = $_FILES['document'];
                if (in_array($newDocument['type'], ['application/pdf'])) {

                    $ext = strtolower(substr($newDocument['name'], -4));
                    $new_name = md5(time() . rand(1, 9999)) . $ext;
                    print_r($new_name);
                    $inputs['document'] = $new_name;
                    $dir = "assets/media/documents/" . $inputs['imovel_id'];

                    if (is_dir($dir)) {
                        if (file_exists($dir . '/' . $new_name)) {
                            unlink($dir . '/' . $new_name);
                            move_uploaded_file($newDocument['tmp_name'], $dir . '/' . $new_name);
                        } else {
                            move_uploaded_file($newDocument['tmp_name'], $dir . '/' . $new_name);
                        }

                    } else {
                        mkdir($dir, 0700, true);
                        if (is_dir($dir)) {
                            move_uploaded_file($newDocument['tmp_name'], $dir . '/' . $new_name);
                        }
                    }
                }
            }

            if (DocumentHandler::create($inputs)) {
                $_SESSION['flash-msg'] = "Enviado com sucesso!";
                $this->redirect('/ksi/adm/area-adm');
                exit;
            }
        }

    }

    public function getDocument($atts)
    {
        $id = $atts['id'];
        $data = ['error' => ''];

        if ($id) {
            $document = DocumentHandler::findByImovelId($id);
            if ($document) {
                $data[] = $document;
            }else{
                $data['error'] = 'Não há dados';
            }
        }else{
            $data['error'] = 'Id vazio';
        }

        header('Content: application/json');
        echo json_encode($data);
    }

}