<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['auxi/icmsporestado/inclusao']['GET'] = 'auxi/icmsporestado_controller/inclusao';


$route['user_authentication/index']['GET'] = 'login/login';
//$route['user_authentication/index']['GET'] = 'user_authentication/index';
$route['entrar']['POST'] = 'login/login_entrar';
$route['logout']['GET'] = 'login/logout';

$route['main/contato']['GET'] = 'main/contato';
$route['main/about']['GET'] = 'main/about';


$route['carrinho']['GET'] = 'carrinho/consultar';
$route['produto/adicionarCarrinho/(:any)']['GET'] = 'produto/adicionarCarrinho/$1';
$route['carrinho/retirar/(:any)']['GET'] = 'carrinho/retirarCarrinho/$1';
$route['finalizar_compra/(:any)']['GET'] = 'carrinho/finalizar_compra/$1';
$route['pedido_finalizado/(:any)/(:any)/(:any)']['GET'] = 'carrinho/pedido_finalizado/$1/$2/$3';
$route['acompanhar_pedidos']['GET'] = 'carrinho/acompanhar_pedidos';



$route['calcular_frete']['POST'] = 'carrinho/calcular_frete';

$route['cadastro/endereco']['GET'] = 'cadastro/endereco';
$route['cadastro/endereco_salvar']['POST'] = 'cadastro/endereco_salvar';
$route['cidade_estado_ajax']['POST'] = 'cadastro/cidadeestado_ajax';
