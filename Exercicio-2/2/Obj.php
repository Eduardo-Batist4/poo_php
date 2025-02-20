<?php 

class Obj {
    private int $width;
    private int $height;

    public function __construct(int $width, int $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth () {
        return $this->width;
    }

    public function getHeight () {
        return $this->height;
    }
}

