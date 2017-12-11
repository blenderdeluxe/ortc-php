<?php

namespace Tests\Handlers;

use Blenderdeluxe\OrtcPhp\Handlers\BalancerUrlResponseHandler;
use Tests\TestCase;

class BalancerUrlResponseHandlerTest extends TestCase
{
    public function testImplementsAndHandle()
    {
        $handler = new BalancerUrlResponseHandler();
        $this->assertInstanceOf('Blenderdeluxe\OrtcPhp\Handlers\OrtcResponseHandler', $handler);

        $url = 'var SOCKET_SERVER = "https://ortc-server.realtime.co ";';
        $response = $handler->handle($url);
        $this->assertInstanceOf('Blenderdeluxe\OrtcPhp\Models\Responses\BalancerUrlResponse', $response);
        $this->assertEquals('https://ortc-server.realtime.co', $response->getUrl());
    }

    /**
     * @dataProvider providerUrlsInvalid
     */
    public function testHandleThrowInvalidBalancerUrlException($url)
    {
        $this->setExpectedException('Blenderdeluxe\OrtcPhp\Exceptions\InvalidBalancerUrlException');
        $handler = new BalancerUrlResponseHandler();

        $response = $handler->handle($url);
    }

    public function providerUrlsInvalid()
    {
        return [
            ['var sockect = "url-invalid"'],
            ['http://undefined'],
            ['var SOCKET_SERVER = "https://undefined:undefined";'],
            ['http://foo+bar.com'],
        ];
    }
}
