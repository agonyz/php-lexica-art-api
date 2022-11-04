<?php

namespace LexicaArt\Api;

use LexicaArt\LexicaArtClient;
use LexicaArt\Response\ResponseMediator;

abstract class AbstractApi
{
    private $client;

    public function __construct(LexicaArtClient $client)
    {
        $this->client = $client;
    }

    protected function getClient(): LexicaArtClient
    {
        return $this->client;
    }

    protected function get(string $path, array $parameters = [], array $requestHeaders = [])
    {
        if (count($parameters) > 0) {
            $path .= '?'.http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
        }

        $response = $this->getClient()->getHttpClient()->get($path, $requestHeaders);

        return ResponseMediator::getContent($response);
    }
}
