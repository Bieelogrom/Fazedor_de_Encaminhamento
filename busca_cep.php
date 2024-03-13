<?php

function buscarCep($cep, $numero){
    $cep = str_replace("-","", $cep);
    $json = file_get_contents('https://viacep.com.br/ws/'.$cep.'/json');
    $ValoresEndereco = json_decode($json);

    return "$ValoresEndereco->logradouro N°$numero - $ValoresEndereco->bairro";

}