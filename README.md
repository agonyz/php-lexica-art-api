# PHP Lexica.Art API

A simple wrapper for lexica.art API, written in PHP.

Uses [Lexica.Art API v1](https://lexica.art/docs).

## Quick Install

```
composer require agonyz/php-lexica-art-api
```

## Basic usage of php-lexica-art-api client
```php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

$client = new \LexicaArt\LexicaArtClient();
$images = $client->api('search')->searchImage('keyword');

        /**
         * @var $image ImageObject
         */
        foreach($images as $image) {
            $image->getGallery();
        }

        // explore a given style
        $client->api('search')->searchImage($images[0]->getId());
```

From ```$client``` object, you have access to all available lexica.art api endpoints.   
Currently only the ```search``` endpoint is supported.

