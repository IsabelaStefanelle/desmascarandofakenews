<?php

namespace test\Servicodeverificacao;

use PHPUnit\Framework\TestCase;
use Desmascarandofakenews\Servicodeverificacao\Processadordenoticias;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Processadordenoticias::class)]


class ProcessadordenoticiasTest extends TestCase
{    
    public function testCriacaoDeObjetos(){        
        $Processadordenoticias = new Processadordenoticias();

        $this->assertInstanceOf(Processadordenoticias::class,$Processadordenoticias);
        
        $Processadordenoticias->isProcesso = 1;

        $this->assertEquals(1,$Processadordenoticias->isProcesso);
        $this->assertEquals(NULL, $Processadordenoticias->iniciarverificacao());
        $this->assertEquals(NULL,$Processadordenoticias->buscarFontes());

        $this->assertGreaterThan(0, $Processadordenoticias->isProcesso);

    }
}
