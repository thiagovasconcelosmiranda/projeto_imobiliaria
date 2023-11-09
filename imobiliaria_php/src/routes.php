<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/imovel', 'ImovelController@index');
$router->post('/imovel/add', 'ImovelController@add');
$router->get('/imovel/{id}/find', 'ImovelController@find');
$router->put('/imovel/{id}/update', 'ImovelController@update');
$router->delete('/imovel/{id}/delete', 'ImovelController@delete');
$router->get('/detalhe-imovel', 'DetalheImovelController@find');

$router->get('/photo','PhotoController@photo');

$router->post('/detalhe-imovel', 'DetalheImovelController@addSchedute');

$router->get('/impreendimentos', 'ImpreendimentoController@index');
$router->post('/impreendimentos', 'ImpreendimentoController@search');


$router->get('/apartamento', 'PagImovelController@apartamento');
$router->get('/casa', 'PagImovelController@casa');
$router->get('/destaque', 'PagImovelController@destaque');

$router->post('/busca-imovel', 'SearchImovelController@findName');
$router->get('/busca-imovel', 'SearchImovelController@findName');

$router->get('/sobre', 'AboutController@index');

$router->post('/login', 'LoginController@login');

$router->get('/anuncio', 'AnuncioController@index');
$router->post('/anuncio', 'AnuncioController@add');

$router->get('/area-cliente', 'AreaClienteController@index');

$router->get('/preco', 'PrecoController@index');

$router->get('/nao-encontrei', 'NotSearchController@index');
$router->post('/nao-encontrei', 'NotSearchController@add');