<?php 

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://www.checkitout.com.br/wb/pingpong');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=betao&idade=40&sexo=marculino");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec($ch);
curl_close($ch);

print_r($resposta);
echo 'curl class';