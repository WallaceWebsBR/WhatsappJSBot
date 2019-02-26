<?php
//IMPORTAR AQUIVOS DE FUNCOES
include 'funcs.php';

//PARA DEBUGAR ERROS, use o 0 para desativar
$debug = '1';

//VARIAVEIS PARA MANIPULAR O TEXTO
$textocompleto = preg_replace("/\r?\n/","", $_GET['text']);
//VERIFICAR SE É MENSAGEM DE GRUPO OU MENSAGEM PRIVADA
$msggrupo = strpos( $textocompleto, ':');
if ($msggrupo != false){
	//SE MENSAGEM EM GRUPO
	$dadosmsg = 'grupo';
$array = explode(":", $textocompleto);
$texto = array("{$array[0]}", "{$array[1]}");
}else{
	//SE MENSAGEM NO PRIVADO
	$dadosmsg = 'privado';
	$texto = array("0", "{$textocompleto}");
}
$msg = $texto[1];

//LISTA DE COMANDOS DISPONIVEIS
if ($msg == "ajudacomandos"){
    echo "Comandos Disponíveis <br />";
    echo " -> piada <br />";
	creditos();
}

if ($msg == "piada"){
	echo $dadosmsg."<br />";
	contar_piada();
	creditos();
}

if ($msg == 'hora'){
	hora();
	creditos();
}
//EM CASO DE NENHUM COMANDO RECONHECIDO, NAO RETORNAR NADA. (PARA EVITAR FLOOD DE MENSAGENS)
else {
echo '';
}
