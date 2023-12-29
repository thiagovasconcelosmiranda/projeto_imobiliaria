<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\ContatoProprietarioHeandler;
use \src\handlers\ContatoInquilinoHandler;
use \src\handlers\ContratoBeneficioHandler;
use \src\handlers\ContratoFiadorHandler;


class KsiContractController extends Controller
{
    private $infoUser;

    private $userAll;
    public function __construct()
    {
        $this->infoUser = LoginHandler::checkLogin();
        if (!$this->infoUser) {
            $this->redirect("/");
        }
       $this->userAll = LoginHandler::findAll();
    }

    public function index()
    {
        $array = [];
        $info = filter_input(INPUT_GET, 'contract');
        $info = explode('-', $info);

        if (empty($info[0])) {
            $info[0] = '';
        }

        if (empty($info[1])) {
            $info[1] = '';
        }

        switch ($info[0]) {
            case 'proprietario':
                $array[] = ContatoProprietarioHeandler::findById($this->infoUser->id);
                break;
            case 'inquilino':
                $array[] = ContatoInquilinoHandler::findById($this->infoUser->id);
                break;
            case 'favorecido':
                $array[] = ContratoBeneficioHandler::findById($this->infoUser->id);
                break;
            case 'fiador':
                $array[] = ContratoFiadorHandler::findById($this->infoUser->id);
                break;
        }

        $this->render('ksi/contract', [
            'infoUser' => $this->infoUser,
            'title' => $info[0],
            'descrition' => $info[1],
            'contratos' => $array
        ]);
    }

    public function generateContract()
    {
        $this->render('/ksi/adm/new-owner-contract', [
            'users' => $this->userAll
        ]);
    }

    public function getUserContract()
    {
        $array = ['error' => ''];
        $users = [];

        $idRent = filter_input(INPUT_GET, 'idRent');
        $idSale = filter_input(INPUT_GET, 'idSale');
        if ($idRent && $idSale) {
            $users[] = $idRent;
            $users[] = $idSale;

            foreach ($users as $item) {
                $infoUser = LoginHandler::findById($item);
                if ($infoUser) {
                    $array[] = $infoUser;
                } else {
                    $array['error'] = "Ddaos não encontrado";
                }
            }
        }

        header('Content: application/json');
        echo json_encode($array);
    }
    
    public function generateContractGuarantor(){
      $this->render('ksi/adm/new-guarantor-contract',[
        'users' => $this->userAll
      ]);
    }

    public function generateContractBenefit(){
        $this->render('ksi/adm/new-benefit-contract',[
          'users' => $this->userAll
        ]);
      }

      public function createContractBenefit(){
         $id_rent = filter_input(INPUT_POST, 'rent');
         if($id_rent){
            if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {
               $newPdf = $_FILES['arquivo'];
                
                if (in_array($newPdf['type'], ['application/pdf'])) {
                  
                    $ext = strtolower(substr($newPdf['name'],-4)); 
                    $new_name = md5(time().rand(1,9999)) . $ext;  
                 }
                 
                if( ContratoBeneficioHandler::create($id_rent, $new_name)){
                    $dir = './assets/media/contract_favorecido/'.$id_rent;
                    
                    if(is_dir($dir)){
                        move_uploaded_file($newPdf['tmp_name'], $dir.'/'.$new_name);
                    }else{
                       mkdir($dir, 0700);
                       if(is_dir($dir)){
                            move_uploaded_file($newPdf['tmp_name'], $dir.'/'.$new_name);
                       }
                    }
                   
                    $_SESSION['flash-msg'] = 'Contrato adicionado com sucesso!';
                    $this->redirect('/ksi/adm/area-adm');
                    exit;
                }
            }
         }
      }

     public function generateContractTenant(){
        $this->render('ksi/adm/new-tenant-contract',[
            'users' => $this->userAll
          ]);
     }

      public function createContractTenant(){
        $id_rent = filter_input(INPUT_POST, 'rent');

        if($id_rent){
            if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {
               $newPdf = $_FILES['arquivo'];
                
                if (in_array($newPdf['type'], ['application/pdf'])) {
                    $ext = strtolower(substr($newPdf['name'],-4)); 
                    $new_name = md5(time().rand(1,9999)) . $ext;  
                 }
                 
                if( ContatoInquilinoHandler::create($id_rent, $new_name)){
                    $dir = './assets/media/contract_inquilino/'.$id_rent;

                    if(is_dir($dir)){
                        move_uploaded_file($newPdf['tmp_name'], $dir.'/'.$new_name);
                    }else{ 
                       mkdir($dir, 0700);
                       if(is_dir($dir)){
                            move_uploaded_file($newPdf['tmp_name'], $dir.'/'.$new_name);
                       }
                    }
                   
                    $_SESSION['flash-msg'] = 'Contrato adicionado com sucesso!';
                    $this->redirect('/ksi/adm/area-adm');
                    exit;
                }
            }
         }
      }
      public function createContractOwner(){
        $id = filter_input(INPUT_POST, 'arquivo');

        if($id){
            if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])){
              $newPdf = $_FILES['arquivo'];
              if (in_array($newPdf['type'], ['application/pdf'])) {
                $ext = strtolower(substr($newPdf['name'],-4)); 
                $new_name = md5(time().rand(1,9999)) . $ext;  
             }
             if(ContatoProprietarioHeandler::create($id, $new_name)){
                $dir = './assets/media/contract_proprietario/'.$id;
                
                if(is_dir($dir)){
                    move_uploaded_file($newPdf['tmp_name'], $dir.'/'.$new_name);
                }else{ 
                   mkdir($dir, 0700);
                   if(is_dir($dir)){
                        move_uploaded_file($newPdf['tmp_name'], $dir.'/'.$new_name);
                   }
                }
               
                $_SESSION['flash-msg'] = 'Contrato adicionado com sucesso!';
                $this->redirect('/ksi/adm/area-adm');
                exit;
             }

            }
        }
      }
}

