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
$router->post('/detalhe-imovel', 'DetalheImovelController@addSchedute');

$router->get('/photo', 'PhotoController@photo');

$router->get('/impreendimentos', 'ImpreendimentoController@index');
$router->post('/impreendimentos', 'ImpreendimentoController@search');


$router->get('/apartamento', 'PagImovelController@apartamento');
$router->get('/casa', 'PagImovelController@casa');
$router->get('/destaque', 'PagImovelController@destaque');

$router->post('/busca-imovel', 'SearchImovelController@findName');
$router->get('/busca-imovel', 'SearchImovelController@findName');

$router->get('/sobre', 'AboutController@index');

$router->post('/login', 'LoginController@checkLogin');
$router->post('/login/{id}/update', 'LoginController@update');
$router->get('/logout', 'LoginController@logout');

$router->get('/anuncio', 'AnuncioController@index');
$router->post('/anuncio', 'AnuncioController@add');

$router->get('/ksi/area-cliente', 'AreaClienteController@index');
$router->get('/ksi/panel', 'KsiPanelController@index');
$router->get('/ksi/alter-user', 'KsiAlterUserController@index');
$router->get('/ksi/contract', 'KsiContractController@index');
$router->get('/ksi/immobile', 'KsiImmobileController@index');
$router->get('/ksi/information', 'KsiInformationController@index');

$router->get('/preco', 'PrecoController@index');

$router->get('/nao-encontrei', 'NotSearchController@index');
$router->post('/nao-encontrei', 'NotSearchController@add');