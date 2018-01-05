<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$Sql = new Hcode\DB\Sql();
	$users = $Sql->select("SELECT * FROM tb_users");

	echo json_encode($users);

});

$app->run();

 ?>