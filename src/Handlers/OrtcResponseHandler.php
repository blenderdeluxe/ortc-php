<?php

namespace Blenderdeluxe\OrtcPhp\Handlers;

use GuzzleHttp\BatchResults;
use GuzzleHttp\Message\FutureResponse;
use Blenderdeluxe\OrtcPhp\Models\Responses\OrtcResponse;

abstract class OrtcResponseHandler
{
    /**
     * handle response from guzzle.
     *
     * @param FutureResponse|BatchResults $response
     *
     * @return OrtcResponse
     */
    abstract public function handle($response);
}
