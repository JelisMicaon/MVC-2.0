<?php
session_start();
require 'config.php';

spl_autoload_register(function ($class){
    if(file_exists('controllers'.D_S.$class.'.php')) {
            require_once 'controllers'.D_S.$class.'.php';
    } elseif(file_exists('models'.D_S.$class.'.php')) {
            require_once 'models'.D_S.$class.'.php';
    } elseif(file_exists('core'.D_S.$class.'.php')) {
            require_once 'core'.D_S.$class.'.php';
    }
});

$core = new Core();
$core->run();
?>