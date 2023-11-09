<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\NotSearchHandler;

class NotSearchController extends Controller
{

  public function index()
  {
    $flashNoSerach = '';
    $activeLink = 'noEncontrado';

    if (!empty($_SESSION['flash-noSerach'])) {
      $flashNoSerach = $_SESSION['flash-noSerach'];
      $_SESSION['flash-noSerach'] = '';
    }

    $this->render('notSearch', [
      'flashNoSerach' => $flashNoSerach,
      'activeLink' => $activeLink
    ]);
  }

  public function add()
  {
    $newlist = [];
    date_default_timezone_set('America/Sao_Paulo');

    $listInput = filter_input_array(INPUT_POST);

    $newlist['nome'] = $listInput['nome'];
    $newlist['cidade'] = $listInput['cidade'];
    $newlist['nome'] = $listInput['nome'];
    $newlist['email'] = $listInput['email'];
    $newlist['telefone'] = $listInput['telefone'];
    $newlist['descricao'] = $listInput['descricao'];
    $newlist['operacao'] = $listInput['operacao'];
    $newlist['locacao'] = $listInput['operacao'];
    $newlist['residencial'] = $listInput['residencial'];
    $newlist['comercial'] = $listInput['comercial'];
    $newlist['terreno'] = $listInput['terreno'];

    for ($i = 1; $i < 15; $i++) {
      $newlist['cidade' . $i] = (!empty($listInput['cidade' . $i]) ? $listInput['cidade' . $i] : '');
    }

    $newlist['valor'] = $listInput['valor'];
    $newlist['garagem'] = $listInput['garagem'];
    $newlist['quarto'] = $listInput['quarto'];


    if (NotSearchHandler::add($newlist)) {
      $_SESSION['flash-noSerach'] = 'Dados enviado com sucesso! Em breve entraremos em contado através do telefone informado';
    }

    $this->redirect('/nao-encontrei');
    exit;


  }

}