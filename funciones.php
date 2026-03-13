<?php
    /**
     * Resumen de esPar
     * Estoy preguntando con una terminaria si el módulo entre el número y dos (2) es cero (0)
     * @param mixed $numero El valor debe ser un número...
     * @return string es un texto, debio a la necesidad
     */
    function esPar(int $numero): string{
        return $numero % 2 === 0 ? "par" : "impar";
    }