<?php

namespace test\InterfaceDoUsuario;

use PHPUnit\Framework\TestCase;
use Desmascarandofakenews\InterfaceDoUsuario\TelaDeBusca;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(TelaDeBusca::class)]


class TelaDeBuscaTest extends TestCase
{    
    public function testCriacaoDeObjetos(){        
        $TelaDeBusca = new TelaDeBusca();

        $this->assertInstanceOf(TelaDeBusca::class,$TelaDeBusca);
        
        $TelaDeBusca->campo_de_Pesquisa = 'Netflix';
        
        $this->assertEquals('Netflix',$TelaDeBusca->campo_de_Pesquisa);
        $this->assertEquals(NULL, $TelaDeBusca->enviarpesquisa());

    }
}