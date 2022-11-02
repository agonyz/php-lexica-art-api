<?php

namespace LexicaArt;

use GuzzleHttp\Client;
use LexicaArt\Api\AbstractApi;

class LexicaArtClient
{
    /**
     * @param $name
     * @return AbstractApi
     */
    public function api($name): AbstractApi
    {
        switch($name) {
            case 'search':
                $api = new Api\Search($this);
                break;
            default:
                throw new \InvalidArgumentException(sprintf('Undefined api instance called: "%s"', $name));
        }

        return $api;
    }

    public function getHttpClient(): Client
    {
        return new Client([
            'base_uri' => 'https://lexica.art/api/v1/'
        ]);
    }
}
