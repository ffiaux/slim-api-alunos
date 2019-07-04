<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) 
{
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get('/alunos', function (Request $request, Response $response, array $args) 
{
	class Car
	{
	    public $color;
	    public $type;
	}

	$myCar = new Car();
	$myCar->color = 'red';
	$myCar->type = 'sedan';

	$yourCar = new Car();
	$yourCar->color = 'blue';
	$yourCar->type = 'suv';

	$cars = array($myCar, $yourCar);
	
	return $response->withJson($cars);
});

$app->run();

