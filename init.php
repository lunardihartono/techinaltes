<?php
require_once "config.php";
require_once "functions.php";

spl_autoload_register(function($className){
    require_once "classes/".$className.".php";
});

$account=new Account();