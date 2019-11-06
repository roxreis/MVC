<?php 

// GET é a informação que o usuario digitar na url
// validação (if ternario) se o usuario no digitar nada vai para "home"
$rota = key($_GET)?key($_GET):"home";

// variavel para deixar o controler dinamico
$controller = $rota."Controller";

// inclusão de controller dinamico
include_once "controllers/".$controller.".php";

// instanciar (criar) um objeto
$obj = new $controller();

// chamando funcao
$obj->acao($rota);
 