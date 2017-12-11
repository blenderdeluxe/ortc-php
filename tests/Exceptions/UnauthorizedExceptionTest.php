<?php

namespace Tests\Exceptions;

use Blenderdeluxe\OrtcPhp\Exceptions\UnauthorizedException;
use Tests\TestCase;

class UnauthorizedExceptionTest extends TestCase
{
    public function testImplements()
    {
        $exception = new UnauthorizedException();
        $this->assertEquals('Unauthorized Access', $exception->getMessage());
    }
}
