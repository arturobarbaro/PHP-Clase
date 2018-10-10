<?php

function muestraE($mensaje){
    echo "$mensaje\n";
    exit(1);
}

if ($argc < 2){
    muestraE("Error: debe introducir el numero a mltiplicar");
}

if ($argc >2){
    muestraE("Error: no debe introducir mas de 2 parametros");
}

$numero = $argv[1];

if (!ctype_digit($numero)){
    muestraE("El argumento no es un numero");
}

$numero = (int) $numero; //No es necesario

if ($numero <0 || $numero>10){
    muestraE("Error: el numero debe estar comprendido entre 0 y 10");
}

function tablaMult($numero){
    for ($i=1; $i <= 10; $i++){
        $res = $numero * $i;
        echo "$numero x $i = $res\n";
    }
}

tablaMult($numero);
