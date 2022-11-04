<?php

namespace LexicaArt\Objects;

class ImageObject extends AbstractLexicaObject
{
    protected function getAttributes(): array
    {
        return array_merge([
            'id' => 'string',
            'gallery' => 'string',
            'src' => 'string',
            'srcSmall' => 'string',
            'prompt' => 'string',
            'width' => 'int',
            'height' => 'int',
            'seed' => 'string',
            'grid' => 'boolean',
            'model' => 'string',
            'guidance' => 'int',
            'promptId' => 'string',
            'nsfw' => 'boolean'
        ]);
    }

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $gallery;

    /**
     * @var string
     */
    protected $src;

    /**
     * @var string
     */
    protected $srcSmall;

    /**
     * @var string
     */
    protected $prompt;

    /**
     * @var int
     */
    protected $width;

    /**
     * @var int
     */
    protected $height;

    /**
     * @var string
     */
    protected $seed;

    /**
     * @var bool
     */
    protected $grid;

    /**
     * @var string
     */
    protected $model;

    /**
     * @var int
     */
    protected $guidance;

    /**
     * @var string
     */
    protected $promptId;

    /**
     * @var bool
     */
    protected $nsfw;


    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getGallery(): string
    {
        return $this->gallery;
    }

    /**
     * @return string
     */
    public function getSrc(): string
    {
        return $this->src;
    }

    /**
     * @return string
     */
    public function getSrcSmall(): string
    {
        return $this->srcSmall;
    }

    /**
     * @return string
     */
    public function getPrompt(): string
    {
        return $this->prompt;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getSeed(): string
    {
        return $this->seed;
    }

    /**
     * @return bool
     */
    public function getGrid(): bool
    {
        return $this->grid;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return int
     */
    public function getGuidance(): int
    {
        return $this->guidance;
    }

    /**
     * @return string
     */
    public function getPromptId(): string
    {
        return $this->promptId;
    }

    /**
     * @return bool
     */
    public function getNsfw(): bool
    {
        return $this->nsfw;
    }
}
