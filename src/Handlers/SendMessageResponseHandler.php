<?php

namespace Blenderdeluxe\OrtcPhp\Handlers;

use GuzzleHttp\BatchResults;
use Blenderdeluxe\OrtcPhp\Models\Responses\SendMessageResponse;

class SendMessageResponseHandler extends OrtcResponseHandler
{
    /**
     * handle response from guzzle.
     *
     * @param BatchResults $results
     *
     * @return SendMessageResponse
     */
    public function handle($results)
    {
        $sendMessageResponse = new SendMessageResponse();
        $sendMessageResponse->setResults($results);

        return $sendMessageResponse;
    }
}
