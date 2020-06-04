<?php
require 'vendor/autoload.php';

use \classes\matematica\Basica;
//use \classes\foto\Upload;

//CLASSES EXTERNAS DO COMPOSER:
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger ('name');
$log->pushHandler (new StreamHandler ('teste.log', Logger::WARNING));

$m = new Basica();
echo $m->somar(2,4);

//$upload = new foto\Upload();

$log->warning ('Foo');
$log->error ('Bar');
