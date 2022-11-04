<?php

namespace LexicaArt\Api;

use LexicaArt\Objects\ImageObject;

class Search extends AbstractApi
{
    /**
     * @param string $keyword
     * @param array $params
     * @return array<ImageObject>
     */
    public function searchImage(string $keyword, array $params = []): array
    {
        $images = [];
        $response = $this->get('search?q='.rawurlencode($keyword), $params)->images;
        foreach ($response as $item) {
            $images[] = new ImageObject($item);
        }
        return $images;
    }
}
