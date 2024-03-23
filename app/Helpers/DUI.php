<?php

function generarDUI(): string
{
    $faker = Faker\Factory::create();

    $primerosDigitos = $faker->randomNumber(7);
    $ultimoDigito = $faker->numberBetween(0, 9);

    // sprintf(formato, argumento1, argumento2)    
    return sprintf("%08d-%d", $primerosDigitos, $ultimoDigito);
}