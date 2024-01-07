<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/ajax/first-last', 'PagImovelController@lastFirstId');


$router->get('/imovel', 'ImovelController@index');
$router->post('/imovel/add', 'ImovelController@add');
$router->get('/imovel/{id}/find', 'ImovelController@find');
$router->put('/imovel/{id}/update', 'ImovelController@update');
$router->delete('/imovel/{id}/delete', 'ImovelController@delete');

$router->get('/detalhe-imovel', 'DetalheImovelController@find');
$router->post('/detalhe-imovel', 'DetalheImovelController@addSchedule');

$router->get('/photo', 'PhotoController@photo');

$router->get('/impreendimentos', 'ImpreendimentoController@index');
$router->post('/impreendimentos', 'ImpreendimentoController@search');

$router->get('/trabalheconosco','WorkController@index');
$router->post('/trabalheconosco/add','WorkController@create');



$router->get('/apartamento', 'PagImovelController@apartamento');
$router->get('/casa', 'PagImovelController@casa');
$router->get('/destaque', 'PagImovelController@destaque');

$router->post('/busca-imovel', 'SearchImovelController@findName');
$router->get('/busca-imovel', 'SearchImovelController@findName');

$router->get('/sobre', 'AboutController@index');

$router->post('/ksi/login', 'KsiLoginController@checkLogin');
$router->post('/ksi/login/{id}/update', 'KsiLoginController@update');
$router->get('/ksi/logout', 'KsiLoginController@logout');
$router->get('/ksi/env-email', 'KsiLoginController@envEmail');
$router->post('/ksi/env-email', 'KsiLoginController@envEmailActive');
$router->get('/ksi/area-cliente', 'KsiAreaClienteController@index');
$router->get('/ksi/panel', 'KsiPanelController@index');
$router->get('/ksi/alter-user', 'KsiAlterUserController@index');
$router->get('/ksi/adm/view-user', 'ksiViewUserController@index');
$router->get('/ksi/contract', 'KsiContractController@index');
$router->get('/ksi/immobile', 'KsiImmobileController@index');
$router->get('/ksi/information', 'KsiInformationController@index');
$router->get('/ksi/alter-password/{token}', 'KsiLoginController@alterPassword');
$router->post('/ksi/alter_password', 'KsiLoginController@alterPasswordAction');
$router->get('/ksi/adm/panel-adm', 'ksiPanelAdmController@index');
$router->get('/ksi/adm/add-user', 'KsiAddUserAdmController@index');

$router->get('/ksi/adm/add-immobile', 'KsiImmobileController@getImmobile');
$router->post('/ksi/adm/add-immobile', 'KsiImmobileController@create');
$router->post('/ksi/adm/alter-immobile/{id}', 'ksiImmobileController@update');

$router->get('/ksi/adm/announcement', 'ksiAnnouncementController@index');
$router->get('/ksi/adm/ajax/announcement/search', 'ksiAnnouncementController@searchAnnouncement');
$router->get('/ksi/adm/ajax/announcement/remove/{id}', 'ksiAnnouncementController@remove');
$router->get('/ksi/adm/NotSearch', 'KsiNotSearchController@index');
$router->get('/ksi/adm/ajax/notSearch', 'KsiNotSearchController@searchNotSearch');
$router->get('/ksi/adm/ajax/notSearch/remove/{id}', 'KsiNotSearchController@remove');
$router->get('/ksi/adm/ajax/immobile', 'ksiImmobileController@search');
$router->get('/ksi/adm/ajax/immobile/remove/{id}', 'ksiImmobileController@remove');
$router->get('/ksi/adm/ajax/user', 'KsiUserController@search');
$router->get('/ksi/adm/area-adm', 'KsiAreaAdmController@index');
$router->get('/ksi/adm/login-adm', 'KsiLoginAdmController@index');
$router->post('/ksi/adm/login-adm-access', 'KsiLoginAdmController@loginAdmAccess');
$router->post('/ksi/login/create', 'KsiLoginAdmController@create');
$router->get('/ksi/ajax/login/check-cpf', 'KsiLoginAdmController@checkCpf');
$router->get('/ksi/ajax/login/check-email', 'KsiLoginAdmController@checkEmail');

$router->get('/ksi/adm/new-contract-owner-contract', 'KsiContractController@generateOwnerContract');
$router->post('/ksi/adm/create-contract-owner', 'KsiContractController@createContractOwner');
$router->get('/ksi/adm/ajax/contract-user', 'KsiContractController@getUserContract');
$router->get('/ksi/adm/new-contract-guarantor', 'KsiContractController@generateContractGuarantor');

$router->get('/ksi/adm/work-list', 'ksiWorkController@index');
$router->get('/ksi/adm/work-list/delete/{id}', 'ksiWorkController@delete');
$router->get('/ksi/adm/work-view', 'ksiWorkController@view');

$router->get('/ksi/adm/schedule-list', 'ksiScheduleController@index');
$router->post('/ksi/adm/schedule-list/delete/{id}', 'ksiScheduleController@delete');


$router->get('/ksi/adm/new-contract-benefit', 'KsiContractController@generateContractBenefit');
$router->post('/ksi/adm/create-contract-benefit', 'KsiContractController@createContractBenefit');

$router->get('/ksi/adm/new-contract-tenant', 'KsiContractController@generateContractTenant');
$router->post('/ksi/adm/create-contract-tenant', 'KsiContractController@createContractTenant');

$router->get('/ksi/adm/document', 'KsiAdmDocumentController@index');
$router->post('/ksi/adm/add-document', 'KsiAdmDocumentController@create');
$router->get('/ksi/ajax/client/document/{id}', 'KsiAdmDocumentController@getDocument');

$router->get('/ksi/adm/activities', 'ksiActivitiesController@index');
$router->post('/ksi/adm/activities/create', 'ksiActivitiesController@create');


$router->get('/anuncio', 'AnuncioController@index');
$router->post('/anuncio', 'AnuncioController@add');

$router->get('/preco', 'PrecoController@index');

$router->get('/nao-encontrei', 'NotSearchController@index');
$router->post('/nao-encontrei', 'NotSearchController@add'); 
$router->get('/lojas', 'LojasController@index');

$router->get('/search-store', 'PagImovelController@searchStore');