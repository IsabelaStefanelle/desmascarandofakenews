<?php

namespace test\SistemaExterno;

use PHPUnit\Framework\TestCase;
use Desmascarandofakenews\SistemaExterno\API;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(API::class)]


class APITest extends TestCase
{    
    public function testCriacaoDeObjetos(){        
        $API = new API();

        $this->assertInstanceOf(API::class,$API);
        
        $API->urlEndpoint = 'https://api.exemplo.com/v1/noticias';
        $API->chaveAPI = 'abc12345-fake-key-987zyx';
        
        $this->assertEquals('https://api.exemplo.com/v1/noticias',$API->urlEndpoint);
        $this->assertEquals('abc12345-fake-key-987zyx', $API->chaveAPI);

        $this->assertNotEmpty($API->chaveAPI);

    }
}
