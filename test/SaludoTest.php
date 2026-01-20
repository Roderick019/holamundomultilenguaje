<?php

use PHPUnit\Framework\TestCase;
use HolaMundoMultilenguaje\Saludo;

class SaludoTest extends TestCase
{
    public function testGenerarSaludoAleatorio(): void
    {
        $saludo = new Saludo();
        $resultado = $saludo->generarSaludoAleatorio();

        // Verifica que el saludo es un string
        $this->assertIsString($resultado['saludo']);

        // Verifica que el saludo no esté vacío
        $this->assertNotEmpty($resultado['saludo']);

        // Verifica que el código es un string
        $this->assertIsString($resultado['codigo']);

        // Verifica que el código no esté vacío
        $this->assertNotEmpty($resultado['codigo']);
    }
}
