<?php
//HEADERS PARA A MANIPULAÇÃO DO TEXTO
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: x-test-header, Origin, X-Requested-With, Content-Type, Accept");
//DEBUGADOR PARA VERIFICAR ERROS
if($debug != 0){
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
}

/////////////////////
//  FUNCOES DO BOT
/////////////////////
function creditos(){
	echo "<br /><br />Bot feito por +5591993922203(WallaceWebs)";
}

function contar_piada(){
$opts = [
    "http" => [
        "method" => "GET",
        "header" => "Accept: application/json\r\n" .
            "Content-Type: application/json\r\n"
		]
	];
$saida = json_decode(file_get_contents('https://us-central1-kivson.cloudfunctions.net/charada-aleatoria', false, stream_context_create($opts)), true);
echo $saida['pergunta'] . "<br /><br />" . $saida['resposta'];
}

function hora(){
	echo time();
}
