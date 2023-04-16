<?php

class FigureCross{
    private int $size;

    public function __construct(int $size){
        $this->size = $size;
    }

    public function printCross() {
        for ($i = 1; $i <= ($this->size + 2); $i++) {
            for ($j = 1; $j <= $this->size; $j++) {
                if ($i == ceil($this->size / 2) || $j == ceil($this->size / 2)) {
                    echo "* ";
                } else {
                    echo "  ";
                }
            }
            echo PHP_EOL;
        }
    }

}

?>