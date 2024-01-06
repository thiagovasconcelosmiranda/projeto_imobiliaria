<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\WorkHandler;

class WorkController extends Controller
{

    public function index()
    {
        $flash="";
        if(!empty($_SESSION['flash-msg'])){
            $flash = $_SESSION['flash-msg'];
            $_SESSION['flash-msg'] = "";

        }
        $about = "none";
        $activeLink = 'trabalheConosco';
        $this->render('trabalheConosco', [
            'aboutFlex' => $about,
            'activeLink' => $activeLink,
            'flash' => $flash
        ]);
    }

    public function create()
    {

        $inputs = filter_input_array(INPUT_POST);
       
        if (isset($_FILES['curriculo']) && !empty($_FILES['curriculo']['tmp_name'])) {
            $newArquivo = $_FILES['curriculo'];


            if (in_array($newArquivo['type'], ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])) {
                $ext = strtolower(substr($newArquivo['name'], -4));
                $new_name = md5(time() . rand(1, 9999)).'.'.$ext;
                $inputs['arquivo'] = $new_name;
                print_r($new_name);
            }
        }

        if (WorkHandler::create($inputs)) {
            $id = WorkHandler::lastId();
            $dir = "assets/media/works/".$id['id']. "/";

            if (is_dir($dir)) {
                move_uploaded_file($newArquivo['tmp_name'], $dir . '/' . $new_name);
            } else {
                mkdir($dir, 0700);
                if (is_dir($dir)) {
                    move_uploaded_file($newArquivo['tmp_name'], $dir . '/' . $new_name);
                }
            }
            $_SESSION['flash-msg'] = "Adicionado com sucesso!";
            $this->redirect('/trabalheconosco');
            exit;
        }

    }
}