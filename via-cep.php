<?php

$cep = "74055100";
$link = "https://viacep.com.br/ws/$cep/json/unicode/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //1 = vai e volta 0 = sem resposta
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch); //json retorno

curl_close($ch);

$data = json_decode($response, true);

print_r($data);

?>