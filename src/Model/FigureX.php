<?php

class FigureX{
    private int $size;

    public function __construct(int $size){
        $this->size = $size;
    }

    public function printX() {
        for ($i = 1; $i <= $this->size; $i++) {

            for ($j = 1; $j <= $this->size; $j++) {
                if ($i == $j || $i == ($this->size + 1 - $j)) {
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