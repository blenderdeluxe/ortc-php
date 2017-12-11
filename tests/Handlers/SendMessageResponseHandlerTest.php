<?php

namespace Tests\Handlers;

use Mockery as m;
use Blenderdeluxe\OrtcPhp\Handlers\SendMessageResponseHandler;
use Tests\TestCase;

class SendMessageResponseHandlerTest extends TestCase
{
    public function testImplementsAndHandle()
    {
        $handler = new SendMessageResponseHandler();
        $this->assertInstanceOf('Blenderdeluxe\OrtcPhp\Handlers\OrtcResponseHandler', $handler);

        $results = m::mock('GuzzleHttp\BatchResults');
        $response = $handler->handle($results);
        $this->assertInstanceOf('Blenderdeluxe\OrtcPhp\Models\Responses\SendMessageResponse', $response);
        $this->assertEquals($results, $response->getResults());
    }
}
