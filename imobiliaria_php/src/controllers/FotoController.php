<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Foto;


class FotoController extends Controller
{

    public function add()
    {
        //
    }

    public function findId($id)
    {
        //
    }

    public function findImovelId($info)
    {
        $ends = Foto::select()
            ->where('imovel_id', $info)
            ->execute();
        return $ends;
    }

    public function update($id)
    {
        //
    }

    public function delete($id)
    {
        Foto::delete()
            ->where('id', $id)
            ->execute();
    }
}