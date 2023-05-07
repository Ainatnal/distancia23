<?php

/**
 * Sumar y multiplicar
 * 
 * A continuación se presentan dos funciones:
 * La primera función se usa para sumar dos números enteros.
 * La segunda función es incluida en la version 2.0 yse usa 
 * para multiplicar dos números enteros.
 * 
 * @author Jose Antonio Espejo Domínguez
 * @since 2023 - 04 - 29
 * @version 3.0 Se ha añadido la  función multiplicar
 * @todo en próximas versiones se ñadirán funciones para restar y dividir.
 */

/**
 * Función para sumar enteros
 * 
 * Función que recibe por parámetros dos números enteros
 * y devuleve la suma de ambos.
 * 
 * @author Jose Antonio Espejo Domínguez
 * @version 1.2 Se ha añadido la captura de excepciones
 * @param int $a Primer número a sumar
 * @param int $b Segundo número a sumar
 * @throws InvalidArgumentException Excepción que salta si alguno de los números introducidos por parámetro no es entero.
 * @return int Resultado de la suma
 */
function sumar($a, $b) {
    if (!is_int($a) || !is_int($b)) {
        throw new InvalidArgumentException('Ambos argumentos deben ser números enteros.');
    }
    return $a + $b;
}

/**
 * Función para multiplicar entetros diferentes de 0
 * 
 * Función que recibe por parámetros dos números enteros
 * diferentes de 0 y devuelve el producto de ambos
 * 
 * @author Jose Antonio Espejo Domínguez
 * @version 3.0 Versión inicial 100% funcional
 * @param int $a Primer número a multiplicar
 * @param int $b Segundo número a multiplicar
 * @throws InvalidArgumentException Excepción que salta si alguno de los números introducidos por parámetro es 0
 * @return int Resultado de la multiplicación
 */
function multiplicar($a, $b) {
    if ($a === 0 || $b === 0) {
        throw new InvalidArgumentException('Ambos argumentos deben ser diferentes de cero.');
    }
    return $a * $b;
}

?>
