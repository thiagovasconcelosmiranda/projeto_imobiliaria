<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\Imovelhandler;
use \src\handlers\LoginHandler;

class PagImovelController extends Controller
{
   private $limit = 3;
   private $infUser;

   public function __construct(){
      $this->infUser = LoginHandler::checkLogin();
   }

   public function apartamento()
   {
      $data = [];
      $apt = filter_input(INPUT_GET, 'apartamento');

      $pagAll = ImovelHandler::findCount('residencial/Apartamento');
      $pageCount = ceil($pagAll / $this->limit);
      $imoveis = ImovelHandler::findType('residencial/apartamento', $apt, $this->limit);

      $data[] = $imoveis;
      $data[] = $pageCount;

      header('Content: application/json');
      echo json_encode($data);

      if ($apt === null) {
         $this->redirect('/');
      }
   }

   public function casa()
   {
      $data = [];
      $casa = filter_input(INPUT_GET, 'casa');
      $pagAll = ImovelHandler::findCount('residencial/Casa');
      $pageCount = ceil($pagAll / $this->limit);

      $imoveis = ImovelHandler::findType('residencial/Casa', $casa, $this->limit);

      $data[] = $imoveis;
      $data[] = $pageCount;
      $data[] = $casa;
      

      header('Content: application/json');
      echo json_encode($data);

      if ($casa === null) {
         $this->redirect('/');
      }
   }

   public function destaque()
   {
      $data = [];
      $destaque = filter_input(INPUT_GET, 'destaque');

      $imoveis = ImovelHandler::findByPublished(3);

      $data[] = $imoveis;

      header('Content: application/json');
      echo json_encode($data);

      if ($destaque === null) {
         $this->redirect('/');
      }
   }

    public function findIdImovel($id){
       $immobile = ImovelHandler::findId($id);
       return $immobile;
       

    }
}