<?php
/**
 * Simple MVC framework
 *
 * 
 */

define('ROOT_URL', '/simpleMVC/');

session_start();
 
// Nastavení interního kódování pro funkce pro práci s řetězci
mb_internal_encoding("UTF-8");

// automatické načítání tříd controllerů a modelů
function autoloadClass($class) {

    if (preg_match('/Controler$/', $class)) {
        require("controlers/" . $class . ".php");
    } elseif (preg_match('/Model$/', $class)) {
        require("models/" . $class . ".php");
    } else {
        
    }
}


spl_autoload_register("autoloadClass");

$router = new RouterControler();

$router->execute(array($_SERVER['REQUEST_URI']));
