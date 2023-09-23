<?php
namespace src\controllers;

use \core\Controller;
use \src\models\End;


class EndController extends Controller {

    public function findAll(){
       return End::select()->execute();
    }

    public function add() {
        //
    }

    public function findId($id){
       //
    }

    public function findImovelId($info){
      $ends = End::select()
      ->where('imovel_id', $info)
      ->execute();
      return $ends;
    }
      
    public function update($id){
       //
    }
    
    public function delete($id){
        End::delete()
        ->where('id', $id['id'])
        ->execute();
    }
}