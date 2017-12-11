<?php

namespace Tests\Models\Requests;

use Mockery as m;
use Blenderdeluxe\OrtcPhp\Configs\OrtcConfig;
use Tests\TestCase;

class OrtcRequestTest extends TestCase
{
    public function testImplementsDefault()
    {
        $request = m::mock('Blenderdeluxe\OrtcPhp\Models\Requests\OrtcRequest[]');
        $ortcConfig = new OrtcConfig();

        $this->assertEquals($request, $request->setOrtcConfig($ortcConfig));
        $this->assertEquals($ortcConfig, $request->getOrtcConfig());

        $this->assertFalse($request->isUrlAbsolute());
    }
}
