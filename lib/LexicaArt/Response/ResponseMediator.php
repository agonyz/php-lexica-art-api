<?php

namespace LexicaArt\Response;

use Psr\Http\Message\ResponseInterface;

class ResponseMediator
{
    public static function getContent(ResponseInterface $response)
    {
        $body = $response->getBody()->__toString();
        if (strpos($response->getHeaderLine('Content-Type'), 'application/json') === 0) {
            $content = json_decode($body, false);
            if (JSON_ERROR_NONE === json_last_error()) {
                return $content;
            }
        }

        return $body;
    }
}
