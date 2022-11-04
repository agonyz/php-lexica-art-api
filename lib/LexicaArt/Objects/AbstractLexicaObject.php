<?php

namespace LexicaArt\Objects;

use stdClass;

abstract class AbstractLexicaObject
{
    abstract public function getAttributes();

    public function __construct(stdClass $json)
    {
        $attributes = $this->getAttributes();

        foreach ($attributes as $attributeName => $attributeType) {
            if (!isset($json->$attributeName)) {
                continue;
            }

            switch ($attributeType) {
                case 'string':
                    $this->$attributeName = $json->$attributeName;
                    break;

                case 'int':
                    $this->$attributeName = intval($json->$attributeName);
                    break;

                case 'boolean':
                    $this->$attributeName = (bool)$json->$attributeName;
                    break;
            }
        }
    }
}
