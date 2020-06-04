<?php
spl_autoload_register(function($class){
    $baseDir = __DIR__.'/classes/';
    $file = $baseDir.str_replace('\\','/', $class).'.php';

    if(file_exists($file)){
        require $file;
    }
});



























//spl_autoload_register(function($class){
  //  if(file_exists(  require 'classes/'.$class.'.php')){
   // require 'classes/' . $class . '.php';
//}
//});
