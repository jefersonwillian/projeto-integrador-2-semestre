<?php

// inicia a sessão
session_start();
//pega o idioma padrão do navegador
$_SESSION['oslang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

//if para verificar qual idioma foi solicitado
if (isset($_GET['lang'])) {
    //se for pt, en o it ele ira incluir o idioma, se não ele inclui o padrão
    if (file_exists("lang/" . $_GET['lang'] . ".php")) {
        //ira incluir o idioma que foi enviar via get
        $_SESSION['included'] = "lang/" . $_GET['lang'] . ".php";
    } else {
        //if para verificar se tem o idioma padrão no navegador, caso não tenha ele ira incluir o inglês
        if (file_exists("lang/" . $_SESSION['oslang'] . ".php")) {
            //inclui o idioma padrão do navegador
            $_SESSION['included'] = "lang/" . $_SESSION['oslang'] . ".php";
        } else {
            //inclui o idioma inglês que esta na pasta lang/en.php
            $_SESSION['included'] = "lang/en.php";
        }
    }
} else {
    if (file_exists("lang/" . $_SESSION['oslang'] . ".php")) {
        $_SESSION['included'] = "lang/" . $_SESSION['oslang'] . ".php";
    } else {
        $_SESSION['included'] = "lang/en.php";
        
    }
}

include $_SESSION['included'];

?>

