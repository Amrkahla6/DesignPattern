<?php
namespace DoorExample;

class WoodenDoor implements Door
{
    protected $width;
    protected $height;

    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        // TODO: Implement getWidth() method.
        return $this->width;
    }

    public function getHeight()
    {
        // TODO: Implement getHeight() method.
        return $this->height;
    }
}