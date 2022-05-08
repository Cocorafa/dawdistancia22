<?php

/**
 * Este es el DocBlock del archivo
 * 
 * Aquí se incluye la información referente a este archivo; que es
 * lo que realiza de una forma genérica y sus principales funciones.
 * 
 * @author Rafael Ignacio Merchán Jiménez.
 * @copyright Este archivo es Creative Commons.
 * @link https://cocorafa.es
 * @version 1.0
 */


/**
 * Incluimos en la función un archivo externo
 * 
 * En el archivo externo se encuentran funciones y métoso que
 * pueden ser necesarios para la ejecución de las funciones de 
 * este archivo.
 */
//include_once 'archivoExterno.php';


/**
 * Función que genera un texto legible
 * 
 * Esta función recibe un número y un texto. Como resultado devuelve
 * un texto que incluye los valores anteriores.
 * 
 * @param int $entero Este es el _número_ que recibe la función
 * @param string $texto Este es el _texto_ que recibe la función
 * @return string $resultado Este es el _texto_ que devuelve la función
 * @version 1.1
 */
function funcion1(int $entero, string $texto)
{

    $resultado = "El número es: ".$entero." e incluye el siguiente texto: ".$texto."<br>";

    return $resultado;
}

// Ejecución de la primera función
$prueba = funcion1(1, "Función 1");
// Mostramos por pantalla el resultado
echo ($prueba);


/**
 * Función que genera un texto legible igual que el anterior
 * 
 * Esta función recibe un número y un texto. Como resultado devuelve
 * un texto que incluye los valores anteriores.
 * 
 * @param int $entero Este es el _número_ que recibe la función
 * @param string $texto Este es el _texto_ que recibe la función
 * @return string $resultado Este es el _texto_ que devuelve la función
 * @version 1.1
 */
function funcion2(int $entero, string $texto)
{

    $resultado = "El número es: ".$entero." e incluye el siguiente texto: ".$texto."<br>";

    return $resultado;
}


// Ejecución de la segunda función
$prueba = funcion2(2, "Función 2");
// Mostramos por pantalla el resultado
echo ($prueba);
