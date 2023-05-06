<?php

/**
 * Clase para manejar una lista de tareas.
 * 
 * La siguiente clase sirve para gestionar lista de tareas pendientes.
 * El primer método de la clase sirve para agregar una tarea a la lista.
 * El segundo método de la función, añadido en la versión 2.0, 
 * sirve para imprimir la lista de tareas.
 * 
 * @author Jose Antonio Espejo Domínguez.
 * @since 2023 - 04 - 29
 * @version 2.0 añadida opción de imprimir la lista de tareas
 * @todo En próximas versiones se añadirá opción para borrar tareas.
 */
class ListaTareas {
    private $tareas = array();// array que almacena la lista de tareas

    /**
     * Agrega una tarea a la lista
     * 
     * Este método recibe un string por parametro, el cual describe la tarea
     * y lo almacena en el string de las tareas
     * 
     * @author Jose Antonio Espejo Domínguez
     * @version 1.2 se suma la excepción al código
     * @param string $tarea Descripción de la tarea a agregar
     * @throws InvalidArgumentException si la descripción de la tarea está vacía o no es una cadena de caracteres
     */
    public function agregarTarea($tarea) {
        if (!is_string($tarea) || empty($tarea)) {
            throw new InvalidArgumentException('La descripción de la tarea no es válida.');
        }
        $this->tareas[] = $tarea;
    }

    /**
     * Obtiene la lista de tareas completa
     * 
     * Cunado se llama a este método, nos devuelve el array con la lista de tareas.
     * 
     * @author Jose Antonio Espejo Domínguez
     * @version 1.2
     * @return array Lista de tareas
     */
    public function obtenerTareas() {
        return $this->tareas;
    }
}

?>