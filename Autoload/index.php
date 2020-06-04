<?php
require 'autoload.php';

use \matematica\Basica;
//use \foto\Upload;

$m = new Basica();
echo $m->somar(2,4);

$upload = new \foto\Upload();
