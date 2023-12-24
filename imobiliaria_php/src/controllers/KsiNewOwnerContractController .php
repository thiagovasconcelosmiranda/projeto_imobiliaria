<?php
namespace src\controllers;

use \core\Controller;

class KsiNewOwnerContractController extends Controller
{

    public function index()
    {

        echo "new contract";
        exit;
        $this->render('ksi/adm/new-owner-contract');
    }

}