<?php
//ini_set('display_errors',1);
//ini_set('display_startup_erros',1);
//error_reporting(E_ALL);

$endpoint = "https://us-central1-kivson.cloudfunctions.net/charada-aleatoria";
//  Initiate curl
$ch = curl_init();

// Set The Response Format to Json
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json']);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set the url
curl_setopt($ch, CURLOPT_URL,$endpoint);

// Execute
$result = curl_exec($ch);

// Closing
curl_close($ch);
