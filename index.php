<?php
//DIGITE A URL DO SERVIDOR APACHE
$urlbase = '';

//PARA DEBUGAR ERROS
//ini_set('display_errors',1);
//ini_set('display_startup_erros',1);
//error_reporting(E_ALL);

//HEADERS PARA A MANIPULAÇÃO DO TEXTO
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: x-test-header, Origin, X-Requested-With, Content-Type, Accept");

//VARIAVEIS PARA MANIPULAR O TEXTO
$textget = $_GET['text'];
$textocompleto = preg_replace("/\r?\n/","", $textget);

//VERIFICAR SE É MENSAGEM DE GRUPO OU MENSAGEM PRIVADA
$msggrupo = strpos( $textocompleto, ':');
if ($msggrupo != false){
$array = explode(":", $textocompleto);
$texto = array("{$array[0]}", "{$array[1]}");
}else{
	$texto = array("0", "{$textocompleto}");
}
//LOG DE MENSAGENS PARA TESTES
//$dateTime = ('Y/m/d G:i:s');
//$file = "logger.html";
//$file = fopen($file, "a");
//$data = "<fieldset><legend> $dateTime </legend> $textocompleto </fieldset> &#013;";
//fwrite($file, $data);
//fclose($file);

//LISTA DE COMANDOS DISPONIVEIS
if ($texto[1] == "ajudacomandos"){
    echo "Comandos Disponíveis <br />";
    echo " -> piada <br /> -> Dia da Semana nesse formato: 22/03/2018";
}

if ($texto[1] == "piada"){
$endpoint = file_get_contents("https://{$urlbase}/piada.php");
$saida = json_decode($endpoint, true);
echo $saida['pergunta'] . "<br /><br />" . $saida['resposta'];
echo "<br /><br />Bot feito por +5591984390053(WallaceWebs)";
}

//BOT PRA SABER O DIA DA SEMANA E RETORNAR VALOR NULO(EVITAR FLOOD DE MENSAGENS)
else {
$response = file_get_contents("http://{$urlbase}/cgi-bin/bot.py?data={$texto[1]}");
  if ($response){
      $response = json_decode($response,true);
        if ($response){
          echo $response['saida'];
	  }
  }
}
