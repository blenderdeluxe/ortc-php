<?php

namespace Blenderdeluxe\OrtcPhp\Handlers;

use GuzzleHttp\Message\FutureResponse;
use Blenderdeluxe\OrtcPhp\Models\Responses\AuthResponse;

class AuthResponseHandler extends OrtcResponseHandler
{
    /**
     * handle response from guzzle.
     *
     * @param FutureResponse $response
     *
     * @return AuthResponse
     */
    public function handle($response)
    {
        $authResponse = new AuthResponse();
        $authResponse->setFailed(false);

        return $authResponse;
    }
}
