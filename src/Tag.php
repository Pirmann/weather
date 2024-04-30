<?php
namespace Pirmann\Weather;

class Tag
{
    private string $tag = '';
    private string $weather = '';

    public function getTag(): string
    {
        return $this->tag;
    }

    public function setTag(string $tag): void
    {
        $this->tag = $tag;
    }

    public function __construct($tag, $weather)
    {
        $this->tag = $tag;
        $this->weather = $weather;
    }

}