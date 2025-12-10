<?php

namespace test\ServicoDeIA;

use PHPUnit\Framework\TestCase;
use Desmascarandofakenews\ServicoDeIA\ServicoDeAnaliseDeIA;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(ServicoDeAnaliseDeIA::class)]


class ServicoDeAnaliseDeIATest extends TestCase
{    
    public function testCriacaoDeObjetos()
    {        
        $ServicoDeAnaliseDeIA = new ServicoDeAnaliseDeIA();

        $this->assertInstanceOf(ServicoDeAnaliseDeIA::class,$ServicoDeAnaliseDeIA);
        
        $ServicoDeAnaliseDeIA->modelo = 'Nat';
        $ServicoDeAnaliseDeIA->versao = 'v4';
        
        $this->assertEquals('Nat',$ServicoDeAnaliseDeIA->modelo);
        $this->assertEquals('v4', $ServicoDeAnaliseDeIA->versao);

        $this->assertIsString($ServicoDeAnaliseDeIA->modelo);

    }
}
