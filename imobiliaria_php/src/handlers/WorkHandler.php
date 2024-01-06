<?php
namespace src\handlers;

use \core\Controller;
use \src\models\Work;

class WorkHandler extends Controller
{

  public static function findAll(){
      $date = Work::select()
      ->execute();

      return $date;
  }

  public static function findByImage($id){
     $work = Work::select('arquivo')
     ->where('id', $id)
     ->one();

     return $work;
  }

    public static function create($array)
    {
        $date = date('Y/m/d H:m:s');
        Work::insert([
          'nome'=> $array['nome'],
          'email'=> $array['email'],
          'telefone'=> $array['telefone'],
          'celular'=> $array['celular'],
          'escolaridade'=> $array['escolaridade'],
          'descricao' => $array['descricao'],
          'arquivo'=> $array['arquivo'],
          'contrato_politica'=> $array['contract'],
          'create_at'=> $date,
          'update_at' => $date
        ])
        ->execute();

        return true;
    }

    public static function findById($id){
      $data = Work::select()
       ->where('id', $id)
       ->one();

       return $data;
    }
    public static function lastId(){
        $lastId =  Work::select('id')
          ->orderBy(['id' => 'desc'])
          ->one();

          return $lastId;
    }

    public static function delete($id){
       Work::delete()
       ->where('id', $id)
       ->execute();

       return true;
    }
}