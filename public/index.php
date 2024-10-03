<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\Controller;

$router = new Router();


// Principal
$router->get('/', [Controller::class, 'index']);


$router->get('/invitados', [Controller::class, 'invitados']);
$router->post('/api/registrar', [Controller::class, 'registrarInvitado']);
$router->get('/documento', [Controller::class, 'documento']);
$router->post('/datos', [Controller::class, 'datos']);


$router->comprobarRutas();