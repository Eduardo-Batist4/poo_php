<?php 

class Obj {
    public int $width;
    public int $height;

    public function __construct(int $width, int $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea () {
        echo "oi";
    }
}

