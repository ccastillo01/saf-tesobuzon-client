<?php
namespace Saf\TesobuzonClient;

use PHPUnit\Framework\TestCase;

class TesobuzonNotificacionTest extends TestCase
{
    private $notificacion   ;

    public function setUp() : void {
        $this->notificacion = new TesobuzonNotificacion;
    }

    public function testSendNotificacion()
    {
        $this->assertTrue(true);
    }
}
