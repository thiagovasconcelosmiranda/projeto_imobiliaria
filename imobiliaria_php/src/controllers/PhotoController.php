<?php
namespace src\controllers;

use src\handlers\ImovelHandler;

use \core\Controller;

class PhotoController extends Controller
{

    public function photo()
    {
        $array = ['error' => ''];
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
  
        if ($id) {
            $photos = ImovelHandler::findPhotoId($id);

            if ($photos) {
                foreach ($photos as $item) {
                    $array[] = $item;
                }
            } else {
                $array['error'] = 'Photos não existe';
            }

        } else {
            $array['error'] = 'Parametro não enviado';
        }

        header('Content: application/json');
        echo json_encode($array);
    }

}