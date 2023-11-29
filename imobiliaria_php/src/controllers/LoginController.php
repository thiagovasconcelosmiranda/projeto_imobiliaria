<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class LoginController extends Controller
{

  public function checkLogin()
  {
    $cpf = filter_input(INPUT_POST, 'cpf');
    $password = filter_input(INPUT_POST, 'password');

    if ($cpf && $password) {
      $token = LoginHandler::veryLogin($cpf, $password);
      if ($token) {
        $_SESSION['token'] = $token;
        $this->redirect('/ksi/area-cliente');
      } else {
        $_SESSION['flash-i'] = 'Cpf ou senha invalidos';
        $this->redirect('/');
      }
    }
  }

  public function logout()
  {
    if (!empty($_SESSION['token'])) {
      $_SESSION['token'] = '';
    }
    $this->redirect('/');
  }

  public function add()
  {

  }

  public function findId()
  {

  }

  public function update()
  {

  }

  public function deletar()
  {

  }
}