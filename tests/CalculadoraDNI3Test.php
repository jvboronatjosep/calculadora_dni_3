<?php

use PHPUnit\Framework\TestCase;
use App\CalculadoraDNI3;

class CalculadoraDNI3Test extends TestCase
{
    public function testObtenerLetra()
    {
        $dniSinLetra = 12345678;
        $calc = new CalculadoraDNI3($dniSinLetra);

        $letraEsperada = 'Z';
        $letraObtenida = substr($calc->getDNIConLetra(), -1); // sacamos la letra final

        $this->assertEquals($letraEsperada, $letraObtenida);
    }

    public function testDNIConLetraCompleto()
    {
        $dniSinLetra = 12345678;
        $calc = new CalculadoraDNI3($dniSinLetra);

        $dniConLetraEsperado = '12345678Z';

        $this->assertEquals($dniConLetraEsperado, $calc->getDNIConLetra());
    }
}
