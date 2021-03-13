<?php

$router=$this->app->router;
$router->group(['namespace' => 'Tecnolaw\File\Controllers', 'prefix' => 'file','middleware' => ['GuxAuth']], function() use ($router) {
	$router->get('list', 'FileController@list');
});
